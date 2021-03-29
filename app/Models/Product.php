<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = ['name', 'slug', 'harga', 'image', 'description', 'category_name'];
    protected $guarded = [];
    use HasFactory;
}
