@extends('home')

@section('content')
    <h3>Cadastro de Cliente</h3>
    <form action="{{ route('customer.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <label for="fullName">Nome:</label>
                <input type="text" name="fullName" id="" class="form-control" placeholder="Digite o nome">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="address">Endereço:</label>
                <input type="text" name="address" id="" class="form-control" placeholder="Digite o endereço">
            </div>
            <div class="col-4">
                <label for="district">Bairro:</label>
                <input type="text" name="district" id="" class="form-control" placeholder="Digite o bairro">
            </div>
            <div class="col-2">
                <label for="state">UF:</label>
                <input type="text" name="state" id="" class="form-control" placeholder="Digite o estado">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <label for="phone">Telefone:</label>
                <input type="number" name="phone" id="" class="form-control" placeholder="Digite o telefone">
            </div>
            <div class="col-3">
                <label for="cellPhone">Celular:</label>
                <input type="number" name="cellPhone" id="" class="form-control" placeholder="Digite o celular">
            </div>
            <div class="col-6">
                <label for="email">E-Mail:</label>
                <input type="email" name="email" id="" class="form-control" placeholder="Digite o e-mail">
            </div>
        </div>

{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <label for="email">E-Mail:</label>--}}
{{--                <input type="email" name="email" id="" class="form-control">--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="row" style="margin-top: 10px">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{route('customer.index')}}" class="btn btn-danger">Cancelar</a>
            </div>

        </div>
    </form>
@endsection
