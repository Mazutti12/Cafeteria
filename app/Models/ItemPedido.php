<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    use HasFactory;
    protected $table = "itens_pedidos";

    protected $fillable = [
        'quantodade',
        'valor',
        'dt_item',
        'produto_id',
        'pedido_id'
    ];
}
