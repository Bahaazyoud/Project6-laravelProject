<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Mail\ResetMail;
use App\Models\Forget;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

// use Illuminate\Validation\Rules\Password;

class userController extends Controller
{

    // public function data(Request $request){

    public function data(Request $request)
    {

        $validated = $request->validate([
            'fname' => 'required|max:255|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
            'lname' => 'required|max:255|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
            'email' => 'required|unique:user|email',
            'phone' => 'required|regex:/^([0]{1}[7-9]{1})([0-9]{8})$/|digits:10|unique:user,phone',
            'pass' => 'required|max:25|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-.]).{8,}$/',
            'pass2' => 'required|max:25|min:8|',
            'pass2' => 'required|max:25|min:8|',
            'address' => 'required',

        ]);


        if ($request->pass !== $request->pass2) {
            var_dump($request->all());
            return redirect('signup')->with('message', 'password does not match');
        } else {
            $user = new User;
            $user->Fname = $request->fname;
            $user->Lname = $request->lname;
            $user->email = $request->email;
            $password = $request->pass;
            $hashed = Hash::make($password);
            $user->password = $hashed;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->save();
            return redirect('/login');
        }
    }

    public function login(Request $request)
    {

        $email = $request->email;
        $password = $request->pass;
        $data = User::where('email', $email)->first();
        session()->put('user_img','log.png');

        if (isset($data)) {

            if (Hash::check($password, $data->password) == true) {

                $request->session()->put('id', $data->id);
                $request->session()->put('name', $data->Fname);
                return redirect('/');
            } else {
                return redirect('login')->with('incorrect_password', 'Password Incorrect');
            }
        } else {
            return redirect('login')->with('email_incorrect', 'Email Does not Exist');
        }
    }

    public function logout()
    {
        if (session()->has('name')) {
            session()->pull('name');
            session()->pull('id');
            session()->put('user_img','log.png');
            return redirect('/');
        } else {
            return redirect('login')->with('email_incorrect', 'Email Does not Exist');
        }
    }

    //reset password functions

    public function forget_password(Request $request)
    {
        $user = User::where('email', $request->forget_email)->first();




        $token =  $request->input('_token');
        if (!isset($user)) {
            return redirect('forget')->with('miss_email', 'Email Does not exist');
        }
        $forget_data = new Forget();
        $forget_data->email = $request->forget_email;
        $forget_data->token = $token;

        $forget_data->save();






        $tokenData = Forget::where('email', $request->forget_email)->first();

        if ($this->sendRestEmail($user->email, $tokenData->token)) {
            return redirect('forget')->with('sent', 'Email Sent');
        } else {
            return redirect('forget')->with('connect', 'Network issue');
        }
    }

    public function sendRestEmail($email, $token)
    {
       // $user = User::where('email' , $email)->first();


        $link = asset('/reset_password?token=' . $token . '&email=' . $email);

        try {
            //Here send the link with CURL with an external email API 
            $data = ["link" => $link, 'email' => $email];

            Mail::to($email)->send(new ResetMail($data));
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function view_rest(Request $request)
    {
        $email = $request->input('email');
        return view('log/reset_password', ['email' => $email]);
    }

    public function rested_password(Request $request)
    {

        $password1 = $request->reset_password;
        $password2 = $request->confirm_reset_password;
        $email = $request->email_reset;
        $request->validate([
            'reset_password' => 'required|min:8|max:25|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-.]).{8,}$/',
            'confirm_reset_password' => 'required|min:8|max:25',
        ]);
        if ($password1 === $password2) {
            $password1 = Hash::make($password1);
            User::where('email', $email)->update(array('password' => $password1));
            return redirect('/login');
        } else {
            return redirect('resetpassword')->with('inn', 'Password Not match');
        }
        // return $request->input();
    }

    //show the details in (admin) board
    public function index()
    {
        return view('/admin/user', [
            'users' => User::all()
        ]);
    }
    //Delete the users in (admin) board
    public function destroy(User $id)
    {
        $id->delete();
        return redirect('/admin/users')->with('message', 'User deleted successfully');
    }

    public function view(Request $req)
    {


        if (!session()->has('user_img')) {
            $req->session()->put('user_img', 'avatar.png');
        }

        $user_id = session('id');

        if (isset($req->user_img)) {
            if ($req->hasfile('user_img')) {

                $img = $req->file('user_img');
                $imgname = $img->getClientOriginalName();
                $img->move('user_img/', $imgname);

                $req->session()->put('user_img', $imgname);
            }
        }
        if (isset($req->update)) {

            if (isset($req->password)) {

                $validated = $req->validate([

                    'Fname' => 'required|max:255|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
                    'Lname' => 'required|max:255|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
                    'address' => 'required',
                    'email' => 'required|email',
                    'phone' => 'required|regex:/^([0]{1}[7-9]{1})([0-9]{8})$/|digits:10',
                    'password' => 'required|max:25|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-.]).{8,}$/',

                ]);

                if ($validated) {

                    $user = User::find($user_id);
                    $user->Fname = $req->input('Fname');
                    $user->Lname = $req->input('Lname');
                    $user->address = $req->input('address');
                    $user->email = $req->input('email');
                    $user->phone = $req->input('phone');
                    $user->password = Hash::make($req->input('password'));
                    if ($req->input('user_image') != 'avatar.png') {
                        $user->user_img = $req->input('user_image');
                    }
                    $req->session()->put('name', $req->input('Fname'));
                    $user->update();
                }
            } else {

                $validated = $req->validate([
                    'Fname' => 'required|max:255|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
                    'Lname' => 'required|max:255|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
                    'address' => 'required',
                    'email' => 'required|email',
                    'phone' => 'required|regex:/^([0]{1}[7-9]{1})([0-9]{8})$/|digits:10',
                ]);

                if ($validated) {

                    $user = User::find($user_id);
                    $user->Fname = $req->input('Fname');
                    $user->Lname = $req->input('Lname');
                    $user->address = $req->input('address');
                    $user->email = $req->input('email');
                    $user->phone = $req->input('phone');
                    if ($req->input('user_image') != 'avatar.png') {
                        $user->user_img = $req->input('user_image');
                    }
                    $req->session()->put('name', $req->input('Fname'));
                    $user->update();
                }
            }
        }


        $user = User::find($user_id);

        $user_id = session('id');
        $user = User::find($user_id);

        return view('user/user_profile', ['user' => $user]);
    }
}
