<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
    public function index(){
      $prodata = Product::all();
      return view('products', compact('prodata'));
    }
}
