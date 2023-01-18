<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CadastrarController extends Controller
{

    public function visualizar()
    {
        return view('formulario');
    }

}