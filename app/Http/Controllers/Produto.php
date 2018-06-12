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

    public function mostra()
    {
        $id	= (new Request)->input('id', '0');
        $produto = \app\Produto::where('id', $id)->first();
        if(empty($produto)) {
            return "Esse produto não existe";
        }

        return view('detalhes',['p' => $produto]);
    }
}
