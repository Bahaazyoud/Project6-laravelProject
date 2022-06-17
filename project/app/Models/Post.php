<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "book";
    protected $fillable = ['user_id', 'catigory_id','name','description','address','publisher','author','book_image','publishing_year','state'];
}
