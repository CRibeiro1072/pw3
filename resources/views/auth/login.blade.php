{{--@extends('home')--}}

{{--@section('content')--}}
    <!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
<div class="container">
    <div class="row" style="margin-top: 45px">
        <div class="col-md-4 col-md-offset-4">
            <h4>Login</h4>
            <hr>
            <form action="{{}}">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" name="email" placeholder="Entre com o email">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Entre com a senha">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary">Login</button>
                </div>
                <br>
                <a href="register">Criar uma nova conta!</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
{{--    <div class="container">--}}

{{--        <!-- Outer Row -->--}}
{{--        <div class="row justify-content-center">--}}

{{--            <div class="col-xl-10 col-lg-12 col-md-9">--}}

{{--                <div class="card o-hidden border-0 shadow-lg my-5">--}}
{{--                    <div class="card-body p-0">--}}
{{--                        <!-- Nested Row within Card Body -->--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6 d-none d-lg-block bg-login-image" ></div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="p-5">--}}
{{--                                    <div class="text-center">--}}
{{--                                        <h1 class="h4 text-gray-900 mb-4">Bem vindo!</h1>--}}
{{--                                    </div>--}}
{{--                                    <form class="user" method="post" action="{{ route('usersLoginDo') }}">--}}
{{--                                        @csrf--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input type="email" class="form-control form-control-user" value="claudinei@gmail.com"--}}
{{--                                                   id="exampleInputEmail" aria-describedby="emailHelp"--}}
{{--                                                   placeholder="Endereço de E-Mail">--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input type="password" class="form-control form-control-user"--}}
{{--                                                   id="exampleInputPassword" placeholder="Senha">--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <div class="custom-control custom-checkbox small">--}}
{{--                                                <input type="checkbox" class="custom-control-input" id="customCheck">--}}
{{--                                                <label class="custom-control-label" for="customCheck">Lembre-me</label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="" class="btn btn-primary btn-user btn-block">--}}
{{--                                            Login--}}
{{--                                        </a>--}}
{{--                                        <hr>--}}
{{--                                    </form>--}}
{{--                                    <div class="text-center">--}}
{{--                                        <a class="small" href="">Esqueceu a senha?</a>--}}
{{--                                    </div>--}}
{{--                                    <div class="text-center">--}}
{{--                                        <a class="small" href="">Crie a sua conta aqui!</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--        <div class="container text-center">--}}
{{--        <form class="form-signin" method="post" action="">--}}
{{--            @csrf--}}
{{--           <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">--}}
{{--            <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>--}}
{{--            <label for="email" class="sr-only">Endereço de email</label>--}}
{{--            <input type="email" name="email" id="email" class="form-control" value="claudinei@gmail.com" placeholder="Seu email" required autofocus>--}}
{{--            <label for="password" class="sr-only">Senha</label>--}}
{{--            <input type="password" id="password" name="password" class="form-control" placeholder="Senha" required>--}}
{{--            <div class="checkbox mb-3">--}}
{{--                <label>--}}
{{--                    <input type="checkbox" value="remember-me"> Lembrar de mim--}}
{{--                </label>--}}
{{--            </div>--}}
{{--            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>--}}
{{--            <p class="mt-5 mb-3 text-muted">&copy; {{ date('Y') }}</p>--}}
{{--        </form>--}}

{{--    </div>--}}
{{--    </div>--}}
{{--@endsection--}}
