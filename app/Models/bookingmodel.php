<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookingmodel extends Model
{
    protected $table = "booking";
    public $timestamps = false;
    protected $fillable = [
        'bookingName',
        'email',
        'phone',
        'service_Date',
        'service_Time',
        'service_type',
        'car_model',
        'branch'

    ];
    use HasFactory;
}
