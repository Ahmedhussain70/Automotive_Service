<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User as usermodel;
use App\Models\productmodel;
use App\Models\cartmodel;

class user extends Controller
{

    public function users()
    {
        $user = usermodel::all();
        return view('pages.admin.users', compact('user'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('userprofile', compact('user'));
    }

    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $user =DB::table('users')->where('name','LIKE','%'.$request->search."%")
            ->orWhere('id','LIKE','%'.$request->search."%")->get();
            $output='';
            if(count($user)>0){

                 $output ='
                 <meta name="csrf-token" content="csrf_token">
                    <table class="table">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Phone Number</td>
                            <td>Address</td>
                            <td>User type</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">';

                        foreach($user as $key => $users){
                            $output .='
                            <tr>
                            <th scope="row">'.$users->id.'</th>
                            <td>'.$users->name.'</td>
                            <td>'.$users->email.'</td>
                            <td>'.$users->phone_number.'</td>
                            <td>'.$users->address.'</td>
                            <td>'.'<form action="/update/'.$users->id.'" method="POST">
                            <input type="hidden" name="_method" value="PUT">
                            <select class="form-select" name="userType" aria-label="select example" >
                                <option selected disabled>'.$users->userType.'</option>
                                <option value="Admin">Admin</option>
                                <option value="Engineer">Engineer</option>
                                <option value="Technical">Technical</option>
                                <option value="User">User</option>
                            </select>

                            <td> <a class="btn btn-info" type="submit" href="update/'.$users->id.'">Update</a> <a class="btn btn-Danger" href="delete/'.$users->id.'">Delete</a>
                            </form>'.'</td>'.
                            '</td>
                            </tr>
                            ';
                        }



                 $output .= '
                     </tbody>
                    </table>';



            }
            return $output;

        }
    }

    public function addUser (Request $request)
    {
        DB::table("users")->insert([
            "name"=> $request->name,
            "email"=> $request->email,
            "password"=> bcrypt($request->password),
            "phone_number"=> $request->phone_number,
            "address"=> $request->address,
            "userType"=> "User"
        ]);
        return redirect()->to(route('login'));
    }

    public function logIn (Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return redirect('login')->with('error', 'The provided credentials do not match our records..');
    }


    public function update(Request $request , $id)
    {
        $edit = DB::table("users")->find($id);
        $edit->userType = $request->input('userType');

        $edit = DB::table("users")->where("id",$request->id)->update([
            "userType"=>$request->userType,
        ]);
     return redirect("users");

    }

    public function delete($id)
    {
        DB::table("users")->delete($id);
        return redirect("users");
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('login');
    }

    public function updateProfile(Request $request) {

        $user = Auth::user();

        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);

        $user->save();

        return redirect("/")->with('success', 'Updated successfully');
    }

    public function index()
    {
        $user = Auth::user()->id;

        $cartItems = DB::table('cart')
                ->join('product', 'cart.proID', '=', 'product.proID')
                ->select('cart.*', 'product.*')
                ->where('user_id',$user)
                ->get();

        return view('cart', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        // $products = ProductModel::all();

        // foreach ($products as $product) {
            $cartItem = CartModel::create([
                'proID' => $request->proID,
                'user_id' => $request->user_id,
                'qty' => $request->qty, // You might want to adjust this if the quantity is specific to each product
                'price' => $request->price,
            ]);
        // }

        return redirect()->back()->with('success_message', 'Items added to cart successfully.');

    }

    // public function order(Request $request){
    //     $user = Auth::user()->id;
    //     $cart = CartModel::where('user_id' , $user)->get();
    //     DB::table('purchases')->insert([
    //         'user_id' => $cart->$user,
    //         'pro_id' => $cart->pro_id,
    //         'qty' => $cart->qty
    //     ]);

    //     return redirect('/')->with('success', 'Your Booking is Created Successfully.');
    // }

    public function order(Request $request)
    {
        $user = Auth::user()->id;
        $cartItems = CartModel::where('user_id', $user)->get();

        foreach ($cartItems as $cartItem) {
            DB::table('purchases')->insert([
                'user_id' => $cartItem->user_id,
                'pro_id' => $cartItem->proID,
                'qty' => $cartItem->qty
            ]);
        }

        CartModel::where('user_id', $user)->delete();

        return redirect('/')->with('success', 'Your order has been successfully created.');
    }

}
