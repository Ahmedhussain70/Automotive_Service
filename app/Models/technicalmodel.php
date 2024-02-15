<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class technicalmodel extends Model
{
    protected $table = "technical";
    public $timestamps = false;
    protected $fillable = [
        'techName',
        'phone',
        'email',
        'password'
    ];
    use HasFactory;
}
