<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class LoggedController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }

  public function createproducts() {
    return view('products.edit');
  }

  public function storeProducts(Request $request) {

    $validatedData = $request -> validate([
      'name' => 'bail|required|string|max:60',
      'short_desc' => 'required|string|max:191',
      'desc' => 'required|max:500',
      'price' => 'required|numeric',
      'qty' => 'required|numeric'
      ]);

    $data = $request -> all();
    $prod = Product::create($data);
    return redirect() -> route('products.show', $prod -> id);

  }

  public function editProducts($id) {
    $prod = Product::findOrFail($id);
    return view('products.edit', compact('prod'));
  }

  public function updateProducts(Request $request, $id) {

    $validatedData = $request -> validate([
      'name' => 'bail|required|string|max:60',
      'short_desc' => 'required|string|max:191',
      'desc' => 'required|max:500',
      'price' => 'required|numeric',
      'qty' => 'required|numeric'
      ]);

    $data = $request -> all();
    $prod = Product::findOrFail($id);
    $prod -> update($data);

    return redirect() -> route('products.show', $id);

  }

  public function destroyProducts($id) {
    $prod = Product::findOrFail($id);
    $prod -> delete();
    return redirect() -> route('products.index');
  }
}
