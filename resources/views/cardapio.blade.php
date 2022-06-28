@extends('templates.visitante')

@section('content')

<!--- Produtos Bebidas --->
<div class="container">
    <div class="div-center">

        <h2 class="h2-homepage">Bebidas</h2>
        <!--- Café Preto --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/cafe-preto.jpg" class="card-img-top cardapio-image" alt="cafe preto">
            <div class="card-body">
                <h5 class="card-title">Café Preto</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <input type="text" name="nome" value="capuccino" hidden>
                <input type="number" step="0.01" name="preco" value="4.30" hidden>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
                <button class="btn btn-primary margin-btn">Adicionar ao carrinho</button>
            </div>
        </div>

        <!--- Capuccino --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/capuccino.jpg" class="card-img-top cardapio-image" alt="Capuccino">
            <div class="card-body">
                <h5 class="card-title">Capuccino</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <input type="text" name="nome" value="capuccino" hidden>
                <input type="number" step="0.01" name="preco" value="4.30" hidden>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
                <button class="btn btn-primary margin-btn">Adicionar ao carrinho</button>
            </div>
        </div>
        <!--- Café Expresso --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/cafe-expresso.jpg" class="card-img-top cardapio-image" alt="Café Expresso">
            <div class="card-body">
                <h5 class="card-title">Café Expresso</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
                <button class="btn btn-primary margin-btn">Adicionar ao carrinho</button>
            </div>
        </div>
        <!--- Café com leite --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/cafe-com-leite.jpg" class="card-img-top cardapio-image" alt="Café com Leite">
            <div class="card-body">
                <h5 class="card-title">Café com Leite</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
                <button class="btn btn-primary margin-btn">Adicionar ao carrinho</button>
            </div>
        </div>
        <!--- Café Gelado --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/cafe-gelado.jpeg" class="card-img-top cardapio-image" alt="Café Gelado">
            <div class="card-body">
                <h5 class="card-title">Café Gelado</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
                <button class="btn btn-primary margin-btn">Adicionar ao carrinho</button>
            </div>
        </div>
        <!--- Chá --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/cha.jpg" class="card-img-top cardapio-image" alt="Chá">
            <div class="card-body">
                <h5 class="card-title">Chá</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
                <button class="btn btn-primary margin-btn">Adicionar ao carrinho</button>
            </div>
        </div>
    </div>

    <!--- Produtos Lanches --->

    <div class="div-center">

        <h2 class="h2-homepage">Lanches</h2>
        <!--- Café Preto --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/misto-quente.jpeg" class="card-img-top cardapio-image" alt="Misto Quente">
            <div class="card-body">
                <h5 class="card-title">Misto Quente</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
                <button class="btn btn-primary margin-btn">Adicionar ao carrinho</button>
            </div>
        </div>
        <!--- Coxinha --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/coxinha.jpg" class="card-img-top cardapio-image" alt="Coxinha">
            <div class="card-body">
                <h5 class="card-title">Coxinha</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
                <button class="btn btn-primary margin-btn">Adicionar ao carrinho</button>
            </div>
        </div>
        <!--- Pão de Queijo --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/pao-de-queijo.jpg" class="card-img-top cardapio-image" alt="Pão de Queijo">
            <div class="card-body">
                <h5 class="card-title">Pão de Queijo</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
                <button class="btn btn-primary margin-btn">Adicionar ao carrinho</button>
            </div>
        </div>
        <!--- Panqueca --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/panqueca-americana.jpg" class="card-img-top cardapio-image" alt="Panqueca">
            <div class="card-body">
                <h5 class="card-title">Panqueca</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
                <button class="btn btn-primary margin-btn">Adicionar ao carrinho</button>
            </div>
        </div>
        <!--- Pastel de Forno --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/pastel-de-forno.jpg" class="card-img-top cardapio-image" alt="Pastel de Forno">
            <div class="card-body">
                <h5 class="card-title">Pastel de Forno</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
                <button class="btn btn-primary margin-btn">Adicionar ao carrinho</button>
            </div>
        </div>
        <!--- Torta de Limão --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/torta-de-limao.jpg" class="card-img-top cardapio-image" alt="Torta de Limão">
            <div class="card-body">
                <h5 class="card-title">Torta de Limão</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
                <button class="btn btn-primary margin-btn">Adicionar ao carrinho</button>
            </div>
        </div>
    </div>


   </div>

@endsection
