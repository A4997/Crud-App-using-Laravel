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
//Basic Routes
Route::get('/', function () {
    return view('index');
});

Route::get('/contact',function(){
  return view('contact');
});

Route::get('/about',function(){
  return view('about');
});


//Customers Routes
Route::get('/customers', 'CustomersController@index');
Route::post('/customers', 'CustomersController@save');
Route::get('/customers/create', 'CustomersController@create');
Route::get('/customers/search_by_name', 'CustomersController@search_by_name');
Route::post('/customers/search_by_name', 'CustomersController@results_by_name');
Route::get('/customers/search_by_phone', 'CustomersController@search_by_phone');
Route::post('/customers/search_by_phone', 'CustomersController@results_by_phone');
Route::get('/customers/search_by_field', 'CustomersController@search_by_field');
Route::post('/customers/search_by_field', 'CustomersController@results_by_field');
Route::get('/customers/search_dynamic', 'CustomersController@search_dynamic');
Route::post('/customers/search_dynamic', 'CustomersController@results_dynamic');
Route::get('/customers/{id}', 'CustomersController@show');
Route::put('/customers/{id}', 'CustomersController@update');
Route::get('/customers/{id}/edit', 'CustomersController@edit');
Route::get('/customers/{id}/delete', 'CustomersController@destroy');
Route::get('/deleted_customer','CustomersController@deleted_customer');
Route::get('/deleted_customer/{id}/restore','CustomersController@restore');
Route::get('/deleted_customer/{id}/delete','CustomersController@drop');

// Products Routes
Route::get('/products', 'ProductsController@index');
Route::get('/vendors','VendorsController@index');
Route::post('/vendors', 'VendorsController@save');
Route::get('/vendors/create','VendorsController@create');

/*
Route::get('/about',function (){
  return "about us page";
});
Route::get ('/contactus',function (){
  return "contact us page";
});
Route::get('/contact/{who}',function ($who){
  return "$who will respond within minutes";
});


Route::get('/search_customers',function (){
$cname = request('cname');
$lname = request('lname');
return "<h1>you are seraching for $cname $lname </h1> ";
});


Route::get ('/staff',function(){
$staff=["Ahmed","mohamed","shady","hassan","gamal"];
$result="<h2>Staff Names:</h2>";
foreach ($staff as $member){
  $result.="<li>$member</li>";
}
$result.="</ul>";
return $result;
});



Route::get('/customers/{cid}',function($cid){
  //return view('customer_profile',["cid"=>$cid]);
  //return view('customer_profile')->with(["cid"=>$cid]);
  return view ('customer_profile',compact("cid"));
});

Route::get('/staff',function(){
$staff_names = ["Ahmed","mohamed","shady","hassan","gamal"];
return view('staff',compact('staff_names'));
});
*/
