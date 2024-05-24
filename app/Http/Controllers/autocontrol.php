<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\automodel as automodel;
use Illuminate\Support\Facades\DB;
use App\Models\productmodel;

class autocontrol extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index(string $page)
    {
        $products = productmodel::all();

        if (!in_array($page, ['tires', 'oils','engines','battary','ABS']))
        {
            abort(404);
        }

        return view($page ,compact("products"));
    }


    public function booking(Request $request)
    {
        DB::table('booking')->insert([
            'bookingName' => $request->bookingName,
            'email' => $request->email,
            'phone' => $request->phone,
            'service_Date' => $request->service_Date,
            'service_Time' => $request->service_Time,
            'service_type' => $request->service_type,
            'car_model' => $request->car_model,
            'branch' => $request->branch
        ]);

        return redirect('/')->with('success', 'Your Booking is Created Successfully.');
    }
}
