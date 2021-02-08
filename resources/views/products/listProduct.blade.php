@extends('home')

@section('content')
    <h3>Visualização de Produto</h3>
    <form>
        <div class="row">
            <div class="col-12">
                <label for="description">Descrição:</label>
                <input type="text" name="description" id="" class="form-control" value="{{ $product->description }}" disabled>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <label for="brand">Marca:</label>
                <input type="text" name="brand" id="" class="form-control" value="{{ $product->brand }}" disabled>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <label for="quantity">Quantidade:</label>
                <input type="text" name="quantity" id="" class="form-control" value="{{ $product->quantity }}" disabled>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label for="priceCost">Preço de compra:</label>
                <input type="text" name="priceCost" id="" class="form-control" value="{{ $product->priceCost }}" disabled>
            </div>
            <div class="col-6">
                <label for="salePrice">Preço de venda:</label>
                <input type="text" name="salePrice" id="" class="form-control" value="{{ $product->salePrice }}" disabled>
            </div>
        </div>

        <div class="row" style="margin-top: 10px">
            <div class="col-12">
                <a href="{{route('product.index')}}" class="btn btn-primary">Sair</a>
            </div>

        </div>
    </form>
@endsection
