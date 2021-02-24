@extends('home')

@section('content')
    <h3>Consulta de Produtos</h3>
    <div class="input-group mb-3" style="width: 500px">
            <a href="{{route('product.create')}}" class="btn btn-success" style="left: 5px">Novo Produto</a>
    </div>
    <table class="table table-responsive-xl">
        <tr>
            <td>#ID</td>
            <td>Descrição</td>
            <td>Marca</td>
            <td>Quantidade</td>
            <td>Preco de custo</td>
            <td>Preco de venda</td>
            <td>Ações</td>
        </tr>

        @foreach($products as $product)

            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->brand->description }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->priceCost }}</td>
                <td>{{ $product->salePrice }}</td>
                <td>
                    <form action="{{ route('product.destroy', ['product' => $product->id]) }}"method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" alt="Excluir">Excluir</button>
                        <a href="{{ route('product.edit', ['product' => $product->id]) }}" class="btn btn-success">Editar</a>
                        <a href="{{ route('product.show', ['product' => $product->id]) }}" class="btn btn-primary">Ver</a>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
