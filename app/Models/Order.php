<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'checkout';
    protected $fillable = [
        'name_depan', 'name_belakang', 'email', 'telphone', 'address', 'provinsi', 'kabupaten',
        'kecamatan', 'kode_pos', 'budget', 'note', 'user_id'
    ];

    use HasFactory;
}
