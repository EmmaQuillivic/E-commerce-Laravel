<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use App\Models\Product;

class ProductController extends Controller
{
  public function index($id)
  {
    $product = Product::find($id);
    return view('product', compact('product'));
  }

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function update(Request $request,$product)
  {
        $input = $request->all();
        $product = Product::find($product);
        $product->Quantity = $input['quantity'];
        $product->save();

        return back();
  }
}
