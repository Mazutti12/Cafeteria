@extends('templates.visitante')

@section('content')
    <div class="conteiner login-container">
        <h4 class="mb-3 text-white">Login</h4>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            @if ($message = Session::get('error'))
                <div class="col-12">
                    <div class="alert alert-danger">{{ $message }}</div>
                </div>
            @endif
            @if ($message = Session::get('sucess'))
                <div class="col-12">
                    <div class="alert alert-success">{{ $message }}</div>
                </div>
            @endif
            <div class="col-12">
                <label for="username" class="form-label text-white">Username:</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                        required>
                    <div class="invalid-feedback">
                        Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-12">
                <label for="password" class="form-label text-white">Password:</label>
                <div class="input-group has-validation">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                        required>
                    <div class="invalid-feedback">
                        Your password is required.
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="distancia">
                <button class="btn btn-warning" type="submit">LogIn</button>
                <a class="bnt margin-lado" href="{{ route('register') }}">Não tenho cadastro</a>
            </div>
        </form>
    </div>
@endsection
