<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "catigory";
    protected $fillable = [
        'name',
        'image'
    ];
    
    
    public $timestamps = false;
}
