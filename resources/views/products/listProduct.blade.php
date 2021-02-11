@extends('home')

@section('content')
    <h3>Visualização de Produto</h3>
    <form>

        <div class="row">
            <div class="col-6">
                <label for="description">Descricao:</label>
                <input type="text" name="description" id="" class="form-control" value="{{ $product->description }}"
                       disabled>
            </div>
            <div class="col-4">
                <div class="col-12">
                    <label for="brand">Marca:</label>
                    <input type="text" name="brand" id="" class="form-control"
                           value="{{ $product->brand->description }}" disabled>
                </div>
            </div>
            <div class="col-2">
                <label for="quantity">Quantidade:</label>
                <input type="number" name="quantity" id="" class="form-control" value="{{ $product->quantity }}"
                       disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <label for="priceCost">Preco de custo:</label>
                <input type="number" step="0.01" name="priceCost" id="" class="form-control"
                       value="{{ $product->priceCost }}" disabled>
            </div>
            <div class="col-2">
                <label for="salePrice">Preco de venda:</label>
                <input type="number" step="0.01" name="salePrice" id="" class="form-control"
                       value="{{ $product->salePrice }}" disabled>
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-12">
                <a href="{{route('product.index')}}" class="btn btn-primary">Sair</a>
            </div>

        </div>
    </form>
@endsection
