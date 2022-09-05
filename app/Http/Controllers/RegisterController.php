<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Servicos\ClienteService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index(Request $request)
    {
        $data = [];

        return view("register", $data);
    }
    public function registerCliente(Request $request)
    {

        $values = $request->all();
        $usuario = new Usuario();
        $usuario->fill($values);

        $password = $request->input("password", "");
        $usuario->password = Hash::make($password);

        $clienteService = new ClienteService();
        $result = $clienteService->salvarUsuario($usuario);

        $status = $result["status"];
        $message = $result["message"];
        $request->session()->flash($status, $message);

        return redirect()->route('home');
    }

    // function update(Request $request, $id)
    // {
    //     $usuario = Usuario::findOrFail($id);

    //     $usuario->update([
    //         'name' => $request->name,
    //         'username' => $request->username,
    //         'email' => $request->email,
    //         'cpf' => $request->cpf,
    //         'password' => $request->password,
    //         'phone' => $request->phone,
    //         'adress' => $request->adress,
    //     ]);

    //     return "Perfil atualizado!";
    // }

    // function show($id)
    // {
    //     $usuario = Usuario::findOrFail($id);

    //     if ($usuario) {
    //         return view('conta');
    //     } else {
    //         return redirect()->back();
    //     }
    // }
}
