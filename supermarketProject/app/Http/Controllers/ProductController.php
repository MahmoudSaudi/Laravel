<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function index()
    {
       // $product = Product::all();   // if you want all data
        $info_db_product = Product::latest()->paginate(9);
       return view('product.index',compact('info_db_product'));
    }



    public function create()
    {
        return view('product.create');
    }




    public function store(Request $request)
    {
        $request->validate(['name_product'=>'required','price'=>'required','details'=>'required']);

        $info_db_product = Product::create($request->all());
        return  redirect()->route('product.index')->with('success','created successfully');
    }




    public function show(Product $info_db_product)
    {
        return view('product.show',compact('info_db_product'));
    }




    public function edit(Product $info_db_product)
    {
        return view('product.edit',compact('info_db_product'));
    }




    public function update(Request $request, Product $info_db_product)
    {
        $request->validate(['name_product'=>'required', 'price'=>'required','details'=>'required']);

        $info_db_product = Product::update($request->all());

        return redirect()->route('product.index')->with('success','updated successfully');
    }




    public function destroy(Product $info_db_product)
    {
        $info_db_product->delete();
        return redirect()->route('product.index')->with('success','product deleted successfully');
    }
}
