<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('Admin.posts',[
            'posts'=>Post::all()
        ]);
    }
    public function singlePage($id){
        $data = Book::find($id);
        $userdata = User::where('id',$data->user_id)->first();
        session()->put('user_id',$userdata->Fname);
        return view('common/post',['data'=>$data,'userdata'=>$userdata]);
    }


    public function view($id)
 {

    $post = Post::where('user_id_oner', $id)->get();



    //return view('user/Order_history' , ['order'=>$order,'user'=>$user]);
 }

}
