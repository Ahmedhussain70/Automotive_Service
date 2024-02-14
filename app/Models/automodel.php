<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class automodel extends Model
{
    use HasFactory;
    protected $table = "booking";
    public $timestamps = false;
    protected $fillable = [
        'name',
        'phone',
        'service_Date',
        'service_Time',
        'service_type',
        'car_model'
    ];
}
