<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class GuestController extends Controller
  {
  public function indexProducts() {
    // primo modo (ORM Eloquent)
    // $prods = Product::all() -> where('deleted', false);
    //secondo modo (ORM Eloquent)
    //$prods = Product::where('deleted', false) -> get();
    // terzo modo (Query builder)
    $prods = DB::table('products') -> where('deleted', false) -> get();
    return view('products.index', compact('prods'));
  }
  public function showProducts($id) {
    $prod = Product::findOrFail($id);
    return view('products.show', compact('prod'));
  }
}
