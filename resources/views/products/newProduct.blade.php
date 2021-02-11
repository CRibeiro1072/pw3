@extends('home')

@section('content')
    <h3>Cadastro de Produto</h3>
    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-6">
                <label for="description">Descricao:</label>
                <input type="text" name="description" id="" class="form-control" placeholder="Digite o produto">
            </div>
            <div class="col-4">
                <label for="brand_id">Marca:</label>
                <select name="brand_id" id="brand_id" class="form-control">
                    <option>Selecione a marca</option>
                    @foreach($brands as $brand)
                        <option value="{{$brand->id}}">{{$brand->description}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-2">
                <label for="quantity">Quantidade:</label>
                <input type="number" name="quantity" id="" class="form-control" placeholder="Digite a QNTD">
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <label for="priceCost">Preco de custo:</label>
                <input type="number" step="0.01" name="priceCost" id="" class="form-control" placeholder="Digite o custo">
            </div>
            <div class="col-2">
                <label for="salePrice">Preco de venda:</label>
                <input type="number" step="0.01" name="salePrice" id="" class="form-control" placeholder="Digite a venda">
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
