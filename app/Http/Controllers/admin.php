<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\productmodel;
use App\Models\bookingmodel;

class admin extends Controller
{
    public function index(){
        $booking = bookingmodel::all();
        return view("pages.admin.booking" ,compact("booking"));
    }

    public function store(Request $request){
        $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            DB::table('product')->insert([
                'image' => $imageName,
                'proName' => $request->proName,
                'price' => $request->price,
                'description' => $request->description,
                'category' => $request->category
            ]);
            return redirect('insertproduct')->with('success', 'Your Booking is Created Successfully.');
    }

    public function delete(){
        // return view('pages/admin/insertproduct');
    }
}
