<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    protected $fillable = ['jasa_id','nama_jasa','estimasi_harga'];
}
