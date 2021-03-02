<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use View;
use App\Http\Requests;
use App\Models\Product;

class CatalogController extends Controller
{
  public function index(){

    $products = Product::all();
    return view('catalog', compact('products'));
  }

  public function __construct()
  {
      $this->middleware('auth');
  }
}
