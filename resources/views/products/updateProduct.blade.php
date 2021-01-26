@extends('home')

@section('content')
    <h1>Edição de Produto</h1>
    <form action="{{ route('product.update', ['product' => $product->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <label for="description">Descrição:</label>
                <input type="text" name="description" id="" class="form-control" value="{{ $product->description }}">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <label for="brand">Marca:</label>
                <input type="text" name="brand" id="" class="form-control" value="{{ $product->brand }}">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <label for="quantity">Quantidade:</label>
                <input type="text" name="quantity" id="" class="form-control" value="{{ $product->quantity }}">
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label for="priceCost">Preço de compra:</label>
                <input type="text" name="priceCost" id="" class="form-control" value="{{ $product->priceCost }}">
            </div>
            <div class="col-6">
                <label for="salePrice">Preço de venda:</label>
                <input type="text" name="salePrice" id="" class="form-control" value="{{ $product->salePrice }}">
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
