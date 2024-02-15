<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departmentmodel extends Model
{
    protected $table = "department";
    public $timestamps = false;
    protected $fillable = [
        'depName'
    ];
    use HasFactory;
}
