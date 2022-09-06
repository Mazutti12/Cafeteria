<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Servicos\VendaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdutosController extends Controller
{
    public function index(){
        $data = [];

        $listaProd = Produto::all();
        $data["lista"] = $listaProd;

        return view("cardapio", $data);
    }
    public function store($produto_id = 0, Request $request){
        $prod = Produto::find($produto_id);

        if($prod){
            $carrinho = session('cart', []);

            array_push($carrinho, $prod);
            session([ 'cart' => $carrinho]);
        }
        return redirect()->route("cardapio");
    }
    public function show(Request $request){
        $carrinho = session('cart', []);
        $data = ['cart'=> $carrinho];

        return view("carrinho", $data);
    }
    public function destroy($id, Request $request){
        $carrinho = session('cart', []);
        if(isset($carrinho[$id])){
            unset($carrinho[$id]);
        }
        session(["cart" => $carrinho]);
        return redirect()->route('ver_carrinho');
    }
    public function finalizar(Request $request){

        $prods = session('cart', []);
        $vendaService = new VendaService();
        $result = $vendaService->finalizarVenda($prods, Auth::user());

        if($result["status"] == "ok"){
            $request->session()->forget("cart");
        }

        $request->session()->flash($result["status"], $result["message"]);
        return redirect()->route('ver_carrinho');
    }
}
