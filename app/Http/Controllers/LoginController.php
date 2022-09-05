<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
     // Ações de login
     public function login(Request $request)
     {
        $data = [];
         // Está enviando o formulário
         if ($request->isMethod('POST')) {

            $username = $request->input("username");
            $password = $request->input("password");

            $credenciais = ['username' => $username, 'password' => $password];

            //  $credenciais = $request->validate([
            //      'username' => ['required'],
            //      'password' => ['required'],
            //  ]);
             // Tenta o login
             if (Auth::attempt($credenciais)) {
                 //session()->regenerate();
                 return redirect()->route('home');
             } else {
                $request->session()->flash("error", "Usuário ou senha inválido");
                 return redirect()->route('login');
             }
         }
         return view('login', $data);
     }
     public function logout() {
         Auth::logout();
         return redirect('login');
       }
}
