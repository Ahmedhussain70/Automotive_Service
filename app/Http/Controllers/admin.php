<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class admin extends Controller
{
    public function store(){
        $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            DB::table('products')->insert([
                'image' => $imageName,
                'Name' => $request->Name,
                'Price' => $request->Price,
                'Description' => $request->Description
            ]);
    }
}
