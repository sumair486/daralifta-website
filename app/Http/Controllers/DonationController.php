<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
// use Illumninate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
// use DB;
use Illuminate\Support\Facades\DB;
use App\Models\Answer;

class DonationController extends Controller
{

                /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('role_or_permission:Donation access|Donation delete', ['only' => ['donation_show']]);
        $this->middleware('role_or_permission:Donation delete', ['only' => ['donation_delete']]);
    }

    public function donation_page()
    {
        $total=Answer::all();

        $count=count($total);
        return view('darul-iftah.donation',compact('count'));
    }

    public function donation_upload(Request $request)
    {
        $data=new Donation();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->contact=$request->contact;
        $data->country=$request->country;
        $data->city=$request->city;
        $data->amount=$request->amount;
        $data->save();
        return redirect()->back()->with('Success2','Donation form Successfully added');

    }

    public function donation_show()
    {
        // $data=Donation::
        $data1=DB::table('donations')->sum('amount');

        // $data=DB::table('donations')->orderBy('status', 'desc')->get();
        $data=Donation::where('status',0)->orderBy('id', 'DESC')->paginate(10);
        // $data=Donation::paginate(20);
        // dd($data);
        return view('donation.index',compact('data','data1'));
    }

    public function donation_delete($id)
    {
        $data=Donation::find($id);
        if(!is_null($data)){
            $data->delete();
        }
        return redirect()->back();
    }

    public function seen($id)
    {

        $data=Donation::find($id);
        $data->status='Done';
        $data->save();
        // if($data->status=="Done"){
        //  $data->orderBy('id','DESC')->get();
        // return redirect()->back();

        // }
        return redirect()->back();


        // $data = Donation::orderBy('id', 'DESC')->get();
    }


}
