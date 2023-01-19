<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class CadastrarController extends Controller
{

    public function visualizar()
    {
        return view('formulario');
    }

    public function index()
    {
        $products = Products::orderBy('created_at', 'desc')->paginate(10);
        return view('formulario',['products' => $products]);
    }
  
    public function create()
    {
        return view('formulario');
    }
  
    public function store(Request $request)
    {
        $products = new Products;
        $products->title = $request->title;
        $products->author = $request->author;
        $products->name = $request->name;
        $products->date = $request->date;
        $products->save();
        return redirect()->route('welcome')->with('message', 'Livro criado com successo!');
    }
  
    public function show($id)
    {
        //
    }
  
    public function edit($id)
    {
        $products = Products::findOrFail($id);
        return view('products.edit',compact('product'));
    }
  
    public function update(ProductRequest $request, $id)
    {
        $products = Products::findOrFail($id);
        $products->title        = $request->title;
        $products->author = $request->author;
        $products->name    = $request->name;
        $products->date       = $request->date;
        $products->save();
        return redirect()->route('products.index')->with('message', 'Livro criado com successo!');
    }
  
    public function destroy($id)
    {
        $products = Products::findOrFail($id);
        $products->delete();
        return redirect()->route('products.index')->with('alert-success','Produto deletado!');
    }

}