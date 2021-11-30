<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $products = Product::all();
        return view('product');
    }

    public function save_data(Request $request)
    {
//        dd($request->all());
      $checked_array =$request->prodid;
      foreach($request->prodname as $key => $value){
          if(in_array($request->prodname[$key], $checked_array)){
              $product = new Product;
              $product->name = $request->prodname[$key];
              $product->price = $request->prod_price[$key];
              $product->quantity = $request->prod_qty[$key];
              $product->save();
    }
        }
return response()->json(['success' => 'Data Inserted']);
    }

}
