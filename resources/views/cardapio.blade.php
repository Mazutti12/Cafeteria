@extends('templates.visitante')

@section('content')
    <!--- Produtos Bebidas --->

    <div class="container">
        <div id="toast" class="toast-meu"></div>
        <div class="div-center">
            <h2 class="h2-homepage ">Cardápio</h2>
            @if (isset($lista))
                @foreach ($lista as $prod)
                    <div class="card card-cardapio-image" style="width: 18rem;">
                        <img src="{{ $prod->foto }}" class="card-img-top cardapio-image" alt="cafe preto">
                        <div class="card-body">
                            <h5 class="card-title">{{ $prod->nome }} - R$ {{ $prod->valor }}</h5>
                            <p class="card-text">{{ $prod->descricao }}</p>
                            <input type="text" name="nome" value="capuccino" hidden>
                            <input type="number" step="0.01" name="preco" value="4.30" hidden>
                            <a class="btn btn-primary margin-btn" href="{{ route('adicionar_carrinho', ['produto_id' => $prod->id]) }}" onclick="toast()">Adicionar ao carrinho</a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>


@endsection
