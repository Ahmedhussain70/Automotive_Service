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
        // return view('pages/oils' , compact("products"));
        // return view('tires' , compact("products"));

        if (!in_array($page, ['tires', 'oils','engines','battary','ABS'])) {
            abort(404);
          }
        
          return view($page ,compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('Admin/CreateDevice');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('images'), $imageName);
        // DB::table('homedevices')->insert([
        //     'image' => $imageName,
        //     'Name' => $request->Name,
        //     'Price' => $request->Price,
        //     'Description' => $request->Description
        // ]);
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
            'car_model' => $request->car_model
        ]);

        return redirect('/')->with('success', 'Your Booking is Created Successfully.');
    }

    public function order(Request $request){
        DB::table('purchases')->insert([
            'user_id' => $request->user_id,
            'pro_id' => $request->pro_id,
            'qty' => $request->qty
        ]);

        return redirect('/')->with('success', 'Your Booking is Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Resource $resource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resource $resource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resource $resource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resource $resource)
    {
        //
    }

}
