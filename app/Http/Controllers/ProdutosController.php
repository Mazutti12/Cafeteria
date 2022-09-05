<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $data = [];

        $listaProd = Produto::all();
        $data["lista"] = $listaProd;

        return view("cardapio", $data);
    }

}
