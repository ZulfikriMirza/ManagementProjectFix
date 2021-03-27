<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'checkout';
    protected $fillable = [
        'name_depan', 'name_belakang', 'email', 'telphone', 'address', 'provinsi', 'kabupaten',
        'kecamatan', 'kode_pos', 'budget', 'note', 'user_id', 'user_name', 'comment', 'done'
    ];

    use HasFactory;
}
