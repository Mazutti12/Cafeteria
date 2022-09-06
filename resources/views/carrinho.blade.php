@extends('templates.visitante')

@section('content')
    <div class="conteiner carrinho-container">
        <div class="div-center">
            <h3 class="h2-homepage">Suas compras</h3>
        </div>
        @if (isset($cart) && count($cart) > 0)
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th class="align-center">#</th>
                        <th class="text-center">Ação</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Nome</th>
                        <th class="text-center">Descrição</th>
                        <th class="text-center">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                        $sequencia = 1;
                    @endphp
                    @foreach ($cart as $id => $p)
                        <tr>
                            <td>{{ $sequencia++ }}</td>
                            <td>
                                <a href="{{ route('carrinho_destroy', ['id' => $id]) }}" class="btn btn-sm" onclick="toast()">
                                    <i class="bi bi-trash3 color-white"></i>
                                </a>
                            </td>
                            <td><img src="{{ asset($p->foto) }}" height="50"></td>
                            <td>{{ $p->nome }}</td>
                            <td>{{ $p->descricao }}</td>
                            <td>R$ {{ $p->valor }}</td>
                        </tr>
                        @php
                            $total += $p->valor;
                        @endphp
                    @endforeach
                </tbody>
                    <tr>
                        <td colspan="6">
                            Total do carrinho: R$ {{ $total }}
                        </td>
                    </tr>
            </table>

            <form action="{{ route('carrinho_finalizar') }}" method="POST">
                @csrf
                <input type="submit" value="Finalizar Compra" class="btn btn-lg btn-success form-control">
            </form>
        @else
            @guest
            <p class="carrinho-p">Nenhum item no carrinho! Está na hora de
                <a href="{{route('login')}}">fazer compras.</a>
            </p>
            @endguest
            @auth
            <p class="carrinho-p">Nenhum item no carrinho! Está na hora de
                <a href="{{route('cardapio')}}">fazer compras.</a>
            </p>
            @endauth
        @endif

    </div>
@endsection

