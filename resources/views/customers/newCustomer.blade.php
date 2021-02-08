@extends('home')

@section('content')
    <h3>Cadastro de Cliente</h3>
    <form action="{{ route('customer.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <label for="fullName">Nome:</label>
                <input type="text" name="fullName" id="" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label for="phone">Telefone:</label>
                <input type="text" name="phone" id="" class="form-control">
            </div>
            <div class="col-6">
                <label for="cellPhone">Celular:</label>
                <input type="text" name="cellPhone" id="" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <label for="email">E-Mail:</label>
                <input type="email" name="email" id="" class="form-control">
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{route('customer.index')}}" class="btn btn-danger">Cancelar</a>
            </div>

        </div>
    </form>
@endsection
