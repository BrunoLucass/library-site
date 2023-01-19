<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class VisualizarController extends Controller
{
    public function visualizar()
    {
        $products = Products::all();
        return view('visualizar',['products' => $products]);
    }

    public function show($id)
    {
        $products = Products::findOrFail($id);
        return view('visualizar', ['products' => $products]);
    }

}