<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function show_category()
    {
        $categories = Category::all();
        return view('books/create_post' , ['categories'=>$categories]);
    }

    public function view_category()
    {
        $categories = Category::all();
        return view('shop/shop' , ['categories'=>$categories]);
    }

    public function add_post(Request $request)
    {
        // $image = $request->file('book_image')->storeAs('public/book_images' , $request->book_image->getClientOriginalName());

        $book = new Book();
        $book-> name = $request->book_name;
        $book-> description = $request->book_breif;
        $book-> publisher = $request->publisher;
        $book-> author = $request->author;
        $book-> publishing_year	 = $request->publish_year;
        $book-> catigory_id  = $request->category;
        $book-> address = $request->address;
        $book->user_id=session('id');
        $formFields=$request->validate([
            'book_image'=>'required'
        ]);
         if($request->hasFile('book_image')){
            $formFields['book_image']=$request->file('book_image')->store('book_image', 'public');
            $request->file('book_image')->move('storage/book_image/',$formFields['book_image']);
        }

        $book->book_image = $formFields['book_image'];
        // Book::create($formFields);
        $book->save();

        return redirect('create-post')->with('succe' , 'Your book will publish after admin approvement');
    }
    public function show()
    {
        $catig = Category::all();
        session()->put('categoryid',$catig[4]['id']);
        return view('Home_page.index', ['catig'=>$catig]);

    }
    public function index(){
        return view('Admin.category',[
            'categories'=>Category::all()
        ]);
    }
    public function create(){
        return view('Admin.category.create');
    }
    public function store(Request $request){
        $formFields=$request->validate([
            'name'=>['required',Rule::unique('catigory','name')],
            'image'=>'required'
        ]);

        if($request->hasFile('image')){
            $formFields['image']=$request->file('image')->store('images', 'public');
            $request->file('image')->move('storage/images/',$formFields['image']);
        }


        Category::create($formFields);
        return redirect('/admin/category')->with('message','Category Added Successfully');
    }
    //update data
    public function update(Request $request, Category $id){
        $formFields=$request->validate([
            'name'=>'required',
            'image'
        ]);

        if($request->hasFile('image')){
            $formFields['image']=$request->file('image')->store('images', 'public');
            $request->file('image')->move('storage/images/',$formFields['image']);
        }

        $id->update($formFields);
        return redirect('/admin/category')->with('message','Category Updated successfully');
    }
    public function edit(Category $id){
        return view('Admin.category.edit',['category'=>$id]);
    }
    //delete data
    public function destroy(Category $id){
        $id->delete();
        return redirect('/admin/category')->with('message','Category deleted successfully');
    }
}
