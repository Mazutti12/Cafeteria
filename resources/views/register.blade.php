@extends('templates.visitante')

@section('content')
<div class="col-md-7 col-lg-8 login-container">
    <h4 class="mb-3 text-white">Cadastre-se</h4>
    <form class="needs-validation" novalidate>
      <div class="row g-3">
        <div class="col-sm-6">
          <label for="firstName" class="form-label text-white">Nome</label>
          <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>

        <div class="col-sm-6">
          <label for="lastName" class="form-label text-white">Sobrenome</label>
          <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>

        <div class="col-12">
          <label for="username" class="form-label text-white">Usuário</label>
          <div class="input-group has-validation">
            <input type="text" class="form-control" id="username" placeholder="joao123" required>
          <div class="invalid-feedback">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="col-12">
          <label for="email" class="form-label text-white">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="joao@exemplo.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="col-12">
          <label for="address" class="form-label text-white">Endereço</label>
          <input type="text" class="form-control" id="address" placeholder="rua Julio de Castilhos-Centro, 95 " required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="col-12">
          <label for="username" class="form-label text-white">Senha</label>
          <div class="input-group has-validation">
            <input type="text" class="form-control" id="password" placeholder="senha" required>
          <div class="invalid-feedback">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="col-12">
          <label for="username" class="form-label text-white">Confirmar Senha</label>
          <div class="input-group has-validation">
            <input type="text" class="form-control" id="conform-password" placeholder="senha" required>
          <div class="invalid-feedback">
              Your username is required.
            </div>
          </div>
        </div>


        <div class="col-md-5">
          <label for="country" class="form-label text-white">País</label>
          <select class="form-select" id="country" required>
            <option value="">Selecione</option>
            <option>Brasil</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid country.
          </div>
        </div>

        <div class="col-md-4">
          <label for="state" class="form-label text-white">Estado</label>
          <select class="form-select" id="state" required>
            <option value="">Selecione</option>
            <option>Rio Grande do Sul</option>
          </select>
          <div class="invalid-feedback">
            Please provide a valid state.
          </div>
        </div>


      </div>

      <hr class="my-4">

      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="same-address">
        <label class="form-check-label text-white" for="same-address">Concordo com os <a href="#">Termos de uso</a></label>
      </div>

      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="save-info">
        <label class="form-check-label text-white" for="save-info">Quero receber email das promoçoes</label>
      </div>
      <div class="distancia">
        <button class="btn btn-warning">Cadastre-se</button>
        <a class="bnt margin-lado" href="register.php">Já tenho cadastro</a>
      </div>
    </div>

  @endsection
