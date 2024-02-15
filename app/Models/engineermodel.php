<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class engineermodel extends Model
{
    protected $table = "engineer";
    public $timestamps = false;
    protected $fillable = [
        'engName',
        'phone',
        'email',
        'password'
    ];
    use HasFactory;
}
