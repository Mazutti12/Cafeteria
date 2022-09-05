<?php

use App\Models\Produto;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $prod = new Produto(['nome' => 'Café Preto', 'descricao' => "Some quick example text to build on the card title and make up the bulk of the card's content.", 'foto' => 'style/img/cafe-preto.jpg', 'valor' => 5.30]);
        $prod->save();
        $prod2 = new Produto(['nome' => 'Capuccino', 'descricao' => "Some quick example text to build on the card title and make up the bulk of the card's content.", 'foto' => 'style/img/capuccino.jpg', 'valor' => 6.70]);
        $prod2->save();
        $prod3 = new Produto(['nome' => 'Café Expresso', 'descricao' => "Some quick example text to build on the card title and make up the bulk of the card's content.", 'foto' => 'style/img/cafe-expresso.jpg', 'valor' => 4.10]);
        $prod3->save();
        $prod4 = new Produto(['nome' => 'Café com Leite', 'descricao' => "Some quick example text to build on the card title and make up the bulk of the card's content.", 'foto' => 'style/img/cafe-com-leite.jpg', 'valor' => 5.00]);
        $prod4->save();
        $prod5 = new Produto(['nome' => 'Café Gelado', 'descricao' => "Some quick example text to build on the card title and make up the bulk of the card's content.", 'foto' => 'style/img/cafe-gelado.jpeg', 'valor' => 6.90]);
        $prod5->save();
        $prod6 = new Produto(['nome' => 'Chá', 'descricao' => "Some quick example text to build on the card title and make up the bulk of the card's content.", 'foto' => 'style/img/cha.jpg', 'valor' => 3.50]);
        $prod6->save();
        $prod7 = new Produto(['nome' => 'Misto Quente', 'descricao' => "Some quick example text to build on the card title and make up the bulk of the card's content.", 'foto' => 'style/img/misto-quente.jpeg', 'valor' => 8.10]);
        $prod7->save();
        $prod8 = new Produto(['nome' => 'Coxinha', 'descricao' => "Some quick example text to build on the card title and make up the bulk of the card's content.", 'foto' => 'style/img/coxinha.jpg', 'valor' => 7.30]);
        $prod8->save();
        $prod9 = new Produto(['nome' => 'Pão de Queijo', 'descricao' => "Some quick example text to build on the card title and make up the bulk of the card's content.", 'foto' => 'style/img/pao-de-queijo.jpg', 'valor' => 3.30]);
        $prod9->save();
        $prod10 = new Produto(['nome' => 'Panqueca', 'descricao' => "Some quick example text to build on the card title and make up the bulk of the card's content.", 'foto' => 'style/img/panqueca-americana.jpg', 'valor' => 5.60]);
        $prod10->save();
        $prod11 = new Produto(['nome' => 'Pastel de Forno', 'descricao' => "Some quick example text to build on the card title and make up the bulk of the card's content.", 'foto' => 'style/img/pastel-de-forno.jpg', 'valor' => 5.80]);
        $prod11->save();
        $prod12 = new Produto(['nome' => 'Torta de Limão', 'descricao' => "Some quick example text to build on the card title and make up the bulk of the card's content.", 'foto' => 'style/img/torta-de-limao.jpg', 'valor' => 10.60]);
        $prod12->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
