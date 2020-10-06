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
    return view('products.create');
  }

  public function storeProducts(Request $request) {

    $validatedData = $request -> validate([
      'firstname' => 'bail|required|alpha|max:60',
      'lastname' => 'required|alpha|max:60',
      'date_of_birth' => 'required|date',
      'private_code' => 'required|digits_between:1,15',
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
      'firstname' => 'bail|required|alpha|max:60',
      'lastname' => 'required|alpha|max:60',
      'date_of_birth' => 'required|date',
      'private_code' => 'required|digits_between:1,15',
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
