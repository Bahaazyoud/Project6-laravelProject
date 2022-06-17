<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\User;
use App\Models\Book;

class ordercontroller extends Controller
{
 public function view()
 {
    // $id = session('id');
    $order = order::where('user_id_request ', 1)->get();

    $user = User::find($order->user_id_oner );
    $user = User::find(1);

    $book = Book::find($order->Book_id);


    return view('user/Order_history' , ['order'=>$order,'user'=>$user]);
 }
}
