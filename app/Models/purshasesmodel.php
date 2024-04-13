<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purshasesmodel extends Model
{
    use HasFactory;
    protected $table = "purchases";
    protected $fillable = [
        'user_id',
        'pro_id',
        'qty'
    ];

}
