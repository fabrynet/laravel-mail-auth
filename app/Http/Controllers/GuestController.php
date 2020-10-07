<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class GuestController extends Controller
  {
    public function indexProducts() {
    $prods = Product::all() -> where('deleted', 0);
    return view('products.index', compact('prods'));
  }
  public function showProducts($id) {
    $prod = Product::findOrFail($id);
    return view('products.show', compact('prod'));
  }
}
