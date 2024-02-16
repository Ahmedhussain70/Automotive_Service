<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\productmodel;

class admin extends Controller
{
    public function index(){
        $products = productmodel::all();
        return view('tirechange' , compact("products"));
    }

    public function store(Request $request){
        $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            DB::table('product')->insert([
                'image' => $imageName,
                'proName' => $request->proName,
                'price' => $request->price,
                'description' => $request->description
            ]);
            return redirect('insertproduct')->with('success', 'Your Booking is Created Successfully.');
    }

    // public function create(){
    //     return view('pages/admin/insertproduct');
    // }
}
