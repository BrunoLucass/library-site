<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(10);
        return view('formulario',['products' => $products]);
    }
  
    public function create()
    {
        return view('products.create');
    }
  
    public function store(ProductRequest $request)
    {
        $product = new Product;
        $product->title        = $request->title;
        $product->author = $request->author;
        $product->name    = $request->name;
        $product->date       = $request->date;
        $product->save();
        return redirect()->route('products.index')->with('message', 'Livro criado com successo!');
    }
  
    public function show($id)
    {
        //
    }
  
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit',compact('product'));
    }
  
    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->title        = $request->title;
        $product->author = $request->author;
        $product->name    = $request->name;
        $product->date       = $request->date;
        $product->save();
        return redirect()->route('products.index')->with('message', 'Livro criado com successo!');
    }
  
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('alert-success','Produto deletado!');
    }
}
