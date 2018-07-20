<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use Auth;

use Charts;

class Transation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        return view('test');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addtrans()
    {
        //
        return view('addtransaction');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name'=> 'required',
            'amount'=> 'required',
            'category'=>'required',
            'subcategory'=>'required',
        ]);
            
           $trans = new Transaction;
           $trans->name = $request->input('name');
           $trans->amount = $request->input('amount');
           $trans->category = $request->input('category');
           $trans->subcategory = $request->input('subcategory');
           $trans->userid = Auth::user()->id;
           $trans->save();

           return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        // $trans = Transaction::where('userid','=',Auth::user()->id)->get();
         $trans = Transaction::where('userid','=',Auth::user()->id)->get();
    return view('listtran', [
        'trans' => $trans
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $trans = Transaction::find($id);

        return view('listtran');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
{
    Transaction::findorfail($id)->delete();
    return redirect('/');
}



    }

