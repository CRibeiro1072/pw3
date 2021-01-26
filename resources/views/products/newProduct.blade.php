@extends('home')

@section('content')
    <h1>Cadastro de Produto</h1>
<form action="{{ route('product.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <label for="description">Descricao:</label>
            <input type="text" name="description" id="" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="brand">Marca:</label>
            <input type="text" name="brand" id="" class="form-control">
        </div>
        <div class="col-6">
            <label for="quantity">Quantidade:</label>
            <input type="text" name="quantity" id="" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <label for="priceCost">Preco de custo:</label>
            <input type="text" name="priceCost" id="" class="form-control">
        </div>
        <div class="col-6">
            <label for="salePrice">Preco de venda:</label>
            <input type="text" name="salePrice" id="" class="form-control">
        </div>
    </div>
    <div class="row" style="margin-top: 10px">
        <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="{{route('product.index')}}" class="btn btn-danger">Cancelar</a>
            </div>

            </div>
</form>
@endsection
