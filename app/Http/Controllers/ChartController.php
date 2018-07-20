<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Charts;
use App\Transaction;
use DB;
class ChartController extends Controller
{
    //
    public function graph()
{
    $trans = Transaction::select('amount')->where('userid','=',Auth::user()->id)->get();
    // $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
    //             ->get();

    $chart = Charts::database($trans, 'pie', 'highcharts')
              ->title("Monthly Expense")
              ->elementLabel("Total Transaction")
              ->dimensions(1000, 500)
              ->responsive(true)
              ->groupBy('amount');

    return view('chart',compact('chart'));
}    
}
