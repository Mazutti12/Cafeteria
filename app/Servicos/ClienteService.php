<?php

namespace App\Servicos;

use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ClienteService
{
   public function salvarUsuario(Usuario $usuario){
    try{
        $dbUsuario = Usuario::where("username", $usuario->username)->first();
        if($dbUsuario){
            return['status' => 'error' , 'message'=> 'Perfil já cadastrado.'];
        }
        DB::beginTransaction();
        $usuario->save();
        DB::commit();

        return['status' => 'sucess' , 'message'=> 'Perfil criado com sucesso.'];
    }catch(\Exception $e){
        Log::error("ERRO",['file' => 'ClienteService.salvarUsuario' , 'message'=> $e->getMessage() ]);

        DB::rollback();
        return['status' => 'error' , 'message'=> 'Não foi possível cadastrar o Perfil.'];
    }

    }
   }
