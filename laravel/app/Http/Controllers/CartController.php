<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\Models\Order;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
  public function index(){
    return view('cart');
  }

  public function addorder() {
    $order = new Order();

    $order->User2_id = Auth::user()->id;
    $order->Price_total = $_POST["price_total"];
    $order->Number_total_products = $_POST["quantity_total"];

    $order->save();
    return redirect()->back();

  }

  public function __construct() {
      $this->middleware('auth');
  }
}
