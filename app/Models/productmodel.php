<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productmodel extends Model
{
    protected $table = "product";
    public $timestamps = false;
    protected $fillable = [
        'Image',
        'phone',
        'proName',
        'price',
        'description'
    ];
    use HasFactory;
}
