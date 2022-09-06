@extends('templates.visitante')

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        //        $(document).ready(function () {
        //     var $seuCampoCpf = $("#cpf");
        //     $seuCampoCpf.mask('000.000.000-00', {reverse: true});
        // });
    </script>
@endsection
@section('content')
    <div class="col-md-7 col-lg-8 login-container">
        <h4 class="mb-3 text-white">Cadastre-se</h4>
        <form class="needs-validation" method="POST" action="{{ route('register_cliente') }}" novalidate>
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
            <div class="row g-3">
                <div class="col-sm-12">
                    <label for="Name" class="form-label text-white">Nome</label>
                    <input type="text" class="form-control" name="name" id="Name" placeholder="João da Silva"
                        value="" required>
                    <div class="invalid-feedback">
                        Valid name is required.
                    </div>
                </div>
                <div class="col-12">
                    <label for="username" class="form-label text-white">Usuário</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" name="username" id="username" placeholder="joao123"
                            required>
                        <div class="invalid-feedback">
                            Your username is required.
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <label for="cpf" class="form-label text-white">CPF <span class="text-muted"></span></label>
                    <input type="number" class="form-control" name="cpf" id="cpf" placeholder="999.999.999-99"
                        maxlength="14" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>
                <div class="col-6">
                    <label for="phone" class="form-label text-white">Telefone<span class="text-muted"></span></label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="(54) 99999-9999)"
                        maxlength="14" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="col-12">
                    <label for="email" class="form-label text-white">Email <span
                            class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="joao@exemplo.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="col-12">
                    <label for="address" class="form-label text-white">Endereço</label>
                    <input type="text" class="form-control" id="address" name="adress"
                        placeholder="rua Julio de Castilhos-Centro, 95 " required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <div class="col-12">
                    <label for="password" class="form-label text-white">Senha</label>
                    <div class="input-group has-validation">
                        <input type="password" class="form-control" id="password" placeholder="senha" name="password"
                            required>
                        <div class="invalid-feedback">
                            Your password is required.
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <label for="username" class="form-label text-white">Confirmar Senha</label>
                    <div class="input-group has-validation">
                        <input type="password" class="form-control" id="conform-password" placeholder="senha" required>
                        <div class="invalid-feedback">
                            Your password is required.
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-4">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address" name="adress">
                <label class="form-check-label text-white" for="same-address">Concordo com os <a href="#">Termos de uso</a></label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label text-white" for="save-info">Quero receber email das promoçoes</label>
            </div>
            <div class="distancia">
                <button class="btn btn-warning" type="submit" value="register">Cadastre-se</button>
                <a class="bnt margin-lado" href="{{ route('login') }}">Sou cadastrado</a>
            </div>
        </form>
    </div>
@endsection
