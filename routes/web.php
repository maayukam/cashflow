<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Transaction;


Route::get('/', function () {
    return view('welcome');
});


// Route::get('/addtransaction', function () {
//     return view('addtransaction');
// });

Route::get('addtransaction','Transation@addtrans');
Route::post('addtransaction','Transation@store');

Route::get('listtran','Transation@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'Transation@index')->name('test');

// Route::delete('/listtran/{id}', 'Transation@delete'); 

Route::delete('/listtran/{id}', function ($id) {
    Transaction::findOrFail($id)->delete();

    return redirect('/listtran');
});

Route::get('chart', 'ChartController@graph');

Route::resource('transactionmodify','Transation');