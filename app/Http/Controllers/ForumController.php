<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index(){
        try{
            return view('forum');

        }catch (\Exception $e){
            return $e->getMessage('Página indisponível no momento!');
        }
    }
}
