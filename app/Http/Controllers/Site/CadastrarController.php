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
        return view('formulario', ['products' => $products]);
    }

    public function create()
    {
        return view('formulario');
    }

    public function store(Request $request)
    {
        $products = new Products;
        $products->id = $request->id;
        $products->title = $request->title;
        $products->author = $request->author;
        $products->name = $request->name;
        $products->date = $request->date;
        $products->user_id = auth()->user()->id;
        $products->save();
        return redirect()->route('welcome')->with('message', 'Livro criado com successo!');
    }

    public function show($id)
    {
        $products = Products::findOrFail($id);
        return view('visualizar', ['products' => $products]);
    }

    public function edit($id)
    {
        $products = Products::findOrFail($id);
        return view('edit', ['products' => $products]);
    }

    public function update(Request $request)
    {
        Products::findOrFail($request->id)->update($request->all());
        return redirect()->route('visualizar')->with('message', 'Livro editado com successo!');
    }

    public function destroy($id)
    {
        $products = Products::findOrFail($id);
        $products->delete();
        return redirect('/visualizar')->with('alert-success', 'Produto deletado!');
    }

}