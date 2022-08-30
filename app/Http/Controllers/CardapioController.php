<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardapioController extends Controller
{
    public function index(){
        try{
            return view('cardapio');

        }catch (\Exception $e){
            return $e->getMessage('Página indisponível no momento!');
        }
    }
}
