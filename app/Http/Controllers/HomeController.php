<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        try{
            return view('index');

        }catch (\Exception $e){
            return $e->getMessage('Página indisponível no momento!');
        }
    }
}
