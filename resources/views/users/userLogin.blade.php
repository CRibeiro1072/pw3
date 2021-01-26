@extends('home')
@section('content')
<div class="container" >
    <div class="row d-flex justify-content-center" style="margin-top: 45px">
        <div class="col-md-4 col-md-offset-4">
            <h4>Login</h4>
            <hr>
            <form action="{{ route('user.check') }}" method="post">
                @csrf
                <div class="results">
                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
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
                <div class="form-group" style="margin-top: 5px">
                    <button type="submit" class="btn btn-block btn-primary">Login</button>
                </div>
                <br>
                <a href="register">Criar uma nova conta!</a>
            </form>
        </div>
    </div>
</div>
@endsection
