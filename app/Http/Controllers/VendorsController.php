<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
use App\City;
class VendorsController extends Controller
{
    public function index()
    {
      $vendor_list=Vendor::all();
      return view('vendors',compact('vendor_list'));
    }
    public function create()
    {
      $cities=City::all();
      return view('new_vendor', compact('cities'));
    }
    public function save(){
      $vendor = new Vendor;
      $vendor->v_name = request('v_name');
      $vendor->v_phone = request('v_phone');
      $vendor->v_address = request('v_address');
      $vendor->city_id = request('city_id');
      $vendor->v_email =  request('v_email');
      $vendor->save();
      return redirect('/vendors');
    }
}
