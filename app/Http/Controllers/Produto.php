<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

class Produto extends Controller
{
    public function lista()
    {
        $produtos = \app\Produto::all();
        return view('listagem')->withProdutos($produtos);
    }
}
