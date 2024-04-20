<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productmodel extends Model
{
    protected $table = "product";
    public $timestamps = false;
    protected $fillable = [
        'proID',
        'image',
        'phone',
        'proName',
        'price',
        'description',
        'category'
    ];
    use HasFactory;
}
