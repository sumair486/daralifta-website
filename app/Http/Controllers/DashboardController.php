<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;
use App\Models\QuestionModel;
use Illuminate\Support\Carbon;
class DashboardController extends Controller
{

    public function index()
    {
        return view('dashboard');
    }
    public function today()
    {
        $today=QuestionModel::whereDate('created_at', Carbon::today())->get();
        $count=count($today);

        $week=QuestionModel::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        $count1=count($week);

        $month=QuestionModel::whereMonth('created_at', date('m'))
        ->whereYear('created_at', date('Y'))
        ->get(['name','created_at']);
        $count2=count($month);

        $year = QuestionModel::whereYear('created_at',Carbon::now()->format('Y'))
        ->get();
        $count3=count($year);

        $total=QuestionModel::all();
        $count4=count($total);
        return view('dashboard',compact('today','count','week','count1','month','count2','year','count3','total','count4'));

    }




}
