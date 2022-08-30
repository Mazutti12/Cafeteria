@extends('templates.visitante')

@section('content')
<div class="conteiner login-container">
    <div class="col-12">
      <label for="username" class="form-label text-white">Username:</label>
      <div class="input-group has-validation">
        <input type="text" class="form-control" id="username" placeholder="Username" required>
        <div class="invalid-feedback">
          Your username is required.
        </div>
      </div>
    </div>
    <div class="col-12">
      <label for="password" class="form-label text-white">Password:</label>
      <div class="input-group has-validation">
        <input type="password" class="form-control" id="password" placeholder="Password" required>
        <div class="invalid-feedback">
          Your password is required.
        </div>
      </div>

    </div>

    <hr class="my-4">

    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="save-info">
      <label class="form-check-label text-white" for="save-info">Salvar login</label>
    </div>
    <div class="distancia">
      <a class="btn btn-warning" href="login/index.php">LogIn</a>
      <a class="bnt margin-lado" href="register.php">Não tenho cadastro ainda</a>
    </div>
  </div>

  @endsection
