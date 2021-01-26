@extends('home')
@section('content')

    <!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de conta</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
       <div class="row d-flex justify-content-center" style="margin-top: 45px">
          <div class="col-md-4 col-md-offset-4">
              <h4>Registrar usuário</h4>
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
                      <input type="text" class="form-control" name="name" placeholder="Entre com o nome" value="{{ old('name') }}">
                      <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                  </div>
                  <div class="form-group">
                      <label for="lastName">Sobre Nome</label>
                      <input type="text" class="form-control" name="lastName" placeholder="Entre com o sobre nome" value="{{ old('lastName') }}">
                      <span class="text-danger">@error('lastName'){{ $message }} @enderror</span>
                  </div>
                  <div class="form-group">
                      <label for="email">E-mail</label>
                      <input type="text" class="form-control" name="email" placeholder="Entre com o e-mail" value="{{ old('email') }}">
                      <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                  </div>
                  <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Entre com a senha">
                      <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                  </div>
                  <div class="form-group">
                     <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                  </div>
                  <br>
                  <a href="login">Eu já tenho uma conta!</a>

              </form>

          </div>
       </div>
    </div>

</body>
</html>
@endsection
