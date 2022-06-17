<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Book;
use App\Models\Category;
use App\Models\contact;


class DashboardController extends Controller
{
    public function index(){
        $user=User::all();
        $book= Book::all();
        $contact= contact::all();
        $category= Category::all();
        $admin= Admin::all()->where('email','=',session()->get('adminEmail'));
        return view('Admin.index',['users'=>$user,'books'=>$book,'contacts'=>$contact,'categories'=>$category,'admin'=>$admin]);
}
}