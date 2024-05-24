<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cartmodel extends Model
{
    use HasFactory;
    protected $table = "cart";
    public $timestamps = false;
    protected $fillable = [
        'cart_id',
        'proID',
        'user_id',
        'qty',
        'price'
    ];
}
