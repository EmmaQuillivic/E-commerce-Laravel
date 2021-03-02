<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User2;
use Auth;

class ProfilController extends Controller
{
  public function index()
  {
    $user = Auth::user()->first();
    return view('profil', compact('user'));
  }

  public function update_picture(Request $request) {
    $user = Auth::user()->first();
    $user->image = str_replace('public/img/user/', '', $request->file('Image')->store('public/img/user'));
    $user->save();

    return back();
  }

    public function add_address(Request $request) {

    $user = Auth::user()->first();
    $user->country = $request->get('country');
    $user->city = $request->get('city');
    $user->address = $request->get('address');
    $user->save();

    return back();

    }

  public function __construct() {
      $this->middleware('auth');
  }
}
