<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar</title>
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row d-flex justify-content-center" style="margin-top: 45px">
        <div class="col-md-4 col-md-offset-4">
            <h4>Criar uma nova conta</h4>
            <hr>
            <form action="{{ route('user.create') }}" method="post">
                @csrf

                <div class="results">
                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" placeholder="Digite seu nome" value="{{ old('name') }}">
                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="lastName">Sobre Nome</label>
                    <input type="text" class="form-control" name="lastName" placeholder="Digite seu sobrenome" value="{{ old('lastName') }}">
                    <span class="text-danger">@error('lastName'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" name="email" placeholder="Digite seu e-mail" value="{{ old('email') }}">
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="">Senha</label>
                    <input type="password" class="form-control" name="password" placeholder="Digite sua senha">
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                </div>
                <br>
                <a href="login">Eu já tenho uma conta</a>
            </form>

        </div>
    </div>
</div>
</body>
</html>
