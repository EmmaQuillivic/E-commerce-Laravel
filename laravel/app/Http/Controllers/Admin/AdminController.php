<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Models\Product;
use App\Models\User2;
use App\Models\Order;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
  public function auth()
  {
    if (auth()->user()->admin == '1') {
      return view ('admin.dashboard.index');
    }
    return redirect()->to('/catalog');
  }

  public function index()
  {
    if (auth()->user()->admin == '1') {
      return view ('admin.products.create');
    }
    return redirect()->to('/catalog');
  }

  public function add(Request $request)
  {
    $product = new Product();

    $product->Name = $request->get('name');
    $product->Available_Colors = $request->get('color');
    $product->Available_Size = $request->get('size');
    $product->Price = $request->get('price');
    $product->Image = str_replace("public/img/bob/", "", $request->file('picture')->store('public/img/bob'));
    $product->Quantity = $request->get('quantity');

    $product->save();
    Session::flash('product','Congrat ! Your product was created.');
    return back();
  }

  public function see()
  {
    $products = Product::all();
    return view('admin.products.see', compact('products'));

  }

  public function see_user()
  {
    $users = User2::all();
    return view('admin.users.see', compact('users'));
  }

  public function order()
  {
    $orders = Order::all();
    $quantity = 0;
    foreach ($orders as $key) {
      ++$quantity;
    }
    echo JSON_encode($quantity);
  }

  public function big_order()
  {
    $prices = DB::table('Order')->select('Price_total')->orderBy('Price_total','desc')->first();
    echo JSON_encode($prices);
  }

  public function refresh()
  {
    $folder = scandir(storage_path("framework/sessions")); //scandir = scan le dossier et montre les fichiers qu'il contient
    $actif = [];
    foreach ($folder as $key => $file) { // pour tout les fichiers du dossier
      if ($file[0] != '.') { //Si le fichier ne commence pas par un '.' alors c'est un fichier session
        $info_session = unserialize(file_get_contents(storage_path("framework/sessions/").$file)); // choppe toute les infos/le contenue du fichier/session
        foreach ($info_session as $key => $user_id) { //pour chaque fichier "session"
          if ((str_contains($key, "login_web") and (filemtime(storage_path("framework/sessions/").$file)) > (time() - 60))) { //filemtime donne la date de la derniere modif du fichier
            //on regarde s'il contient l'id d'un utilisateur (si non = inactif) et si ça derniere action remonte à plus de 1min (si oui = inactif)
            array_push($actif, $user_id);
          }
        }
      }
    }
    $user = User2::find($actif); //MERCI ISMAËL
    echo JSON_encode($user);
  }


  public function remove($id){
    Product::first()->where('id',$id)->delete();
    Session::flash('remove','Congrat ! Your product was removed.');
    return redirect()->back();
  }

  public function __construct()
  {
      $this->middleware('auth');
  }

}
