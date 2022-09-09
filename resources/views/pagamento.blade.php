@extends('templates.visitante')
@section('content')
    <div class="container">
        <div id="toast-pagamento" class="toast-meu"></div>
        <div class="row">

            @if (isset($cart) && count($cart) > 0)
                <table class="table text-danger">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($cart as $id => $produto)
                            <tr>
                                <td>{{ $produto->nome }}</td>
                                <td>R$ {{ $produto->valor }}</td>
                            </tr>
                            @php
                                $total += $produto->valor;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            @endif

                <form action="{{ Route('carrinho_finalizar') }} " method="POST" class="login-container ">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label for="ncredito" class="ncredito">Cartão de Crédito:</label>
                            <input type="text" onkeyup="mascara('#### #### #### ####',this,event,true)" name="ncredito" class=" form-control" />
                        </div>
                        <div class="col-4">
                            <label for="cvv" class="ncredito">CVV:</label>
                            <input type="text" maxlength="4" name="ncvv" class="ncvv form-control" />
                        </div>
                        <div class="col-4">
                            <label for="mesexp" class="ncredito">Mês de Expiração:</label>
                            <input type="number" maxlength="2" name="mesexp" class="mesexp form-control" />
                        </div>
                        <div class="col-4">
                            <label for="anoexp" class="ncredito">Ano de Expiração:</label>
                            <input type="text" maxlength="4" name="anoexp" class="anoexp form-control" />
                        </div>

                        <div class="col-8">
                            <label for="nomecartao" class="ncredito">Nome no Cartão de Crédito:</label>
                            <input type="text" name="nomecartao" class="nomecartao form-control" />
                        </div>

                        <div class="col-4">
                            <label for="totalfinal" class="ncredito">Valor Total:</label>
                            <p><input type="text" name="totalfinal"
                                value="R$ 22.60"
                                {{-- {{ $total }} --}}
                                    class="totalfinal form-control" readonly /></p>
                        </div>
                    </div>
                    <input type="submit" onclick="toast_finalizar_compora()" value="Finalizar Compra" class="btn btn-lg btn-success form-control">

                </form>
        </div>
    </div>
@endsection
