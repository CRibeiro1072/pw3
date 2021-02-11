@extends('home')

@section('content')
    <h3>Consulta de Marcas</h3>
    <div class="input-group mb-3" style="width: 500px">
        <input type="text" class="form-control" placeholder="Infome o termo a ser pesquisado" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
            <a href="{{ route('brand.create') }}" class="btn btn-success" style="left: 5px">Nova Marca</a>
        </div>
    </div>
    <table class="table table-responsive-xl">
        <tr>
            <td>#ID</td>
            <td>Marca</td>
            <td>Ações</td>
        </tr>
        @foreach($brands as $brand)
            <tr>
                <td>{{ $brand->id }}</td>
                <td>{{ $brand->description }}</td>
                <td>
                    <form action="{{ route('brand.destroy', ['brand' => $brand->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" alt="Excluir">Excluir</button>
                        <a href="{{ route('brand.edit', ['brand' => $brand->id]) }}"
                           class="btn btn-success">Editar</a>
                        <a href="{{ route('brand.show', ['brand' => $brand->id]) }}" class="btn btn-primary">Ver</a>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
