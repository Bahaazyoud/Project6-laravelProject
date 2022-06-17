<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //show data in admin
    public function index(){
        return view('Admin.posts',[
            'books'=>Book::all()
        ]);
    }

    public function show(Request $req)
    {
        if (isset($req->cat_id)) {
            $book = Book::where('catigory_id', $req->cat_id)->get();
        }elseif(isset($req->search)){
            $book = Book::where('name','LIKE', "%{$req->search}%")->orWhere('author','LIKE', "%{$req->search}%")->get();
        } else {
            $book = Book::all();
        }
        $category = Category::all();
        return view('shop/shop', ['book' => $book, 'category' => $category]);
    }




    public function view(Request $req)
    {

        $user = User::find(session('id'));
        $book = Book::where('user_id', $req->id)->get();



        return view('user/Order_history', ['book' => $book, 'user' => $user]);
    }



    public function update($id)
    {
        $post = Book::find($id);

        $post->state = 0;
        $post->update();

        return  redirect('/order/'.session('id'))->with('flash_message', 'data Updated!');
    }

    public function enable($id)
    {
        $post = Book::find($id);

        $post->state = 1;
        $post->update();

        return  redirect('/order/'.session('id'))->with('flash_message', 'data Updated!');
    }

    public function delete($id)
    {
        $post = Book::find($id);
        $post->delete();

        return  redirect('/order/'.session('id'))->with('flash_message', 'data Deleted!');
    }
    //delete from admin
    public function destroy(Book $id){
        $id->delete();
        return redirect('/admin/books')->with('message','Book deleted successfully');
    }
    //edit from admin
    public function edit(Book $id){
        return view('Admin.posts.edit',['book'=>$id]);
    }
    public function editState(Request $request, Book $id){
        $formFields=$request->validate([
            'state'=>'required'
        ]);

        $id->update($formFields);
        return redirect('/admin/books')->with('message','Book Updated successfully');
    }


}
