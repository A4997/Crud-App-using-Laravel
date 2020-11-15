<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\City;

class CustomersController extends Controller
{
    public function index(){
      $customersdata = Customer::all();
      return view('customers', compact('customersdata'));
      //return view('customers')->with(["customers" => $customers]);
      //return view('customers', ["customers" => $data]);
    }

    public function show($id){
      $cust_data = Customer::find($id);
      return view('view_customer', compact('cust_data'));
    }

    public function create(){
      $cities = City::all();
      return view('new_customer', compact('cities'));
    }

    public function save(Request $req){
        $cust = new Customer;
      if ($req->file('cimage')!==NULL) {
        $imgname=$req->file('cimage')->getClientOriginalName();
        $req->file('cimage')->move('img',$imgname);
        $cust->c_image = $imgname;
      }
      //$cust->cimage = $req->file('cimage')-getClientSize();//2ashan hwa m4 byshoof el image
      $cust->cname = request('cname');
      $cust->cphone = request('cphone');
      $cust->caddress = request('caddress');
      $cust->city= request('city');
      $cust->cemail =  request('cemail');
      $cust->save();
      return redirect('/customers');
    }

    public function edit($id){
      $customer = Customer::find($id);
      //return view('update_customer')->with(["customer" => $customer]);
      return view('update_customer', compact('customer'));
    }

    public function update($id){
      $customer = Customer::find($id);
      $customer->cname = request('cname');
      $customer->cphone = request('cphone');
      $customer->cemail = request('cemail');
      $customer->caddress = request('caddress');
      $customer->save();
      return redirect('/customers/'  . $customer->id);
    }

    public function destroy($id){
      $customer = Customer::find($id);
      $customer->delete();
      return redirect('/customers');
    }

    public function search_by_name(){
      return view('search_by_name');
    }

    public function results_by_name(){
      $cname = request('cname');
      $customers = Customer::where('cname', 'LIKE' , '%' . $cname . '%')->get();
      return view('search_by_name', compact('customers'));
    }

    public function search_by_phone(){
      return view('search_by_phone');
    }

    public function results_by_phone(){
      $cphone = request('cphone');
      $customers = Customer::where('cphone', $cphone)->get();
      return view('search_by_phone', compact('customers'));
    }

    public function search_by_field(){
      return view('search_by_field');
    }

    public function results_by_field(){
      $sc = request('sc');
      $field = request('field');
      /*
      if($field == "cn"){
        $customers = Customer::where('cname', 'LIKE', '%'. $sc . '%')->get();
      } elseif ($field == "cp"){
        $customers = Customer::where('cphone', $sc)->get();
      } elseif($field == "ce"){
        $customers = Customer::where('cemail', $sc)->get();
      } elseif($field == "ca"){
        $customers = Customer::where('caddress', $sc)->get();
      }
      */
      $customers = Customer::where($field, 'LIKE', '%' . $sc . '%')->get();
      return view('search_by_field', compact('customers'));
    }

    public function search_dynamic(){
      return view('search_dynamic');
    }

    public function results_dynamic(){
      $sc = request('sc');
      $customers = Customer::where('cname', 'LIKE' , '%'.$sc.'%')
                          ->orWhere('cphone', $sc)
                          ->orWhere('cemail', 'LIKE', '%'.$sc.'%')
                          ->orWhere('caddress', 'LIKE', '%'.$sc.'%')
                          ->get();
      return view('search_dynamic', compact('customers'));
    }
    public function deleted_customer()
    {
    $deleted_customer=Customer::onlyTrashed()->get();
    return view('deleted_customer',compact('deleted_customer'));
    }
    public function restore($id)
    {
      $customer=Customer::withTrashed()->find($id);
      $customer->restore();
      return redirect('/deleted_customer');
    }
    public function drop($id)
    {
      $customer=Customer::onlyTrashed()->find($id);
      $customer->forceDelete();
      return redirect('/deleted_customer');
    }
}
