@extends('templates.visitante')

@section('content')
    <!--- Produtos Bebidas --->

    <h2 class="h2-homepage">Cardápio</h2>
    @if (isset($lista))
        @foreach ($lista as $prod)
            <div class="container">
                <div class="div-center">

                    <div class="card card-cardapio-image" style="width: 18rem;">
                        <img src="{{ $prod->foto }}" class="card-img-top cardapio-image" alt="cafe preto">
                        <div class="card-body">
                            <h5 class="card-title">{{ $prod->nome }} - R$ {{ $prod->valor }}</h5>
                            <p class="card-text">{{ $prod->descricao }}</p>
                            <input type="text" name="nome" value="capuccino" hidden>
                            <input type="number" step="0.01" name="preco" value="4.30" hidden>
                            <button class="btn btn-primary margin-btn">Adicionar ao carrinho</button>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    @endif


@endsection
