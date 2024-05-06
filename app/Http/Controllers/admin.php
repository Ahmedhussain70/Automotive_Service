<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\productmodel;
use App\Models\bookingmodel;
use App\Models\branchesmodel;
use App\Models\purshasesmodel;
use App\Charts\MonthlySalesChart;
use App\Charts\YearlySalesChart;

class admin extends Controller
{
    public function allBooking(){
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

    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $booking =DB::table('booking')->where('bookingName','LIKE','%'.$request->search."%")
            ->orWhere('bookingID','LIKE','%'.$request->search."%")->get();
   
            $output='';
            if(count($booking)>0){
        
                 $output ='
                 <meta name="csrf-token" content="csrf_token">
                    <table class="table">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>Name</td>
                            <td>Phone Number</td>
                            <td>Service Date</td>
                            <td>Service Time</td>
                            <td>Service Type</td>
                            <td>Car Model</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">';
        
                        foreach($booking as $key => $book){
                            $output .='
                            <tr>
                            <th scope="row">'.$book->bookingID.'</th>
                            <td>'.$book->bookingName.'</td>
                            <td>'.$book->phone.'</td>
                            <td>'.$book->service_Date.'</td>
                            <td>'.$book->service_Time.'</td>
                            <td>'.$book->service_type.'</td>
                            <td>'.$book->car_model.'</td>
                            <td>'.'
                            <input type="hidden" name="_method" value="PUT">
                            <input class="btn btn-info" type="submit" value="Accept">
                            <a class="btn btn-Danger" href="">Reject</a>
                            '.'</td>'.
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

    public function searchSales(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $Sales = productmodel::select('users.name','product.proName','purchases.pur_date',DB::raw('SUM(price * qty) AS budget'))
            ->join('purchases','purchases.pro_id', '=', 'product.proID' )
            ->join('users','users.id', '=', 'purchases.user_id' )
            ->groupBy('users.name','product.proName','purchases.pur_date')
            ->limit(5)
            ->get();
   
            $output='';
            if(count($Sales)>0){
        
                 $output ='
                 <meta name="csrf-token" content="csrf_token">
                    <table class="table">
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Product Name</td>
                            <td>Date</td>
                            <td>budget</td>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">';
        
                        foreach($Sales as $key => $saless){
                            $output .='
                            <tr>
                            <th scope="row">'.$saless->name.'</th>
                            <td>'.$saless->proName.'</td>
                            <td>'.$saless->pur_date.'</td>
                            <td>'.$saless->budget.'</td>
                            <td>'.'

                            '.'</td>'.
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

    public function saleschart(MonthlySalesChart $chart, YearlySalesChart $yearlySales)
    {
        $recentTransactions = productmodel::select('users.name','product.proName','purchases.pur_date',DB::raw('SUM(price * qty) AS budget'))
            ->join('purchases','purchases.pro_id', '=', 'product.proID' )
            ->join('users','users.id', '=', 'purchases.user_id' )
            ->groupBy('users.name','product.proName','purchases.pur_date')
            ->limit(5)
            ->get();

        return view('pages.admin.index')
        ->with('recentTransactions', $recentTransactions)
        ->with('chart', $chart->build())
        ->with('yearlySales', $yearlySales->build());

    }

    public function sales(){
        $allSales = productmodel::select('users.name','product.proName','purchases.pur_date',DB::raw('SUM(price * qty) AS budget'))
            ->join('purchases','purchases.pro_id', '=', 'product.proID' )
            ->join('users','users.id', '=', 'purchases.user_id' )
            ->groupBy('users.name','product.proName','purchases.pur_date')
            ->get();
            return view('pages.admin.sales', compact('allSales'));
    }

    public function branches(){
        $Cairo = bookingmodel::where('branch', 'Cairo')->count();
        $Alex = bookingmodel::where('branch', 'Alex')->count();
        $Sohag = bookingmodel::where('branch', 'Sohag')->count();
        return view("pages.admin.branches")->with('Cairo', $Cairo)->with('Alex', $Alex)->with('Sohag', $Sohag);
    }

    public function updateProfile(Request $request) {
    
        $user = Auth::user();
    
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
    
        $user->save();

        return redirect("dashboard")->with('success', 'updated successfully');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('pages.admin.profile', compact('user'));
    }
}
