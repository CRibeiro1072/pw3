@extends('home')

@section('content')
    <h3>Consulta de Aparelhos</h3>
    <div class="input-group mb-3" style="width: 500px">
        <input type="text" class="form-control" placeholder="Infome o termo a ser pesquisado" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
            <a href="{{ route('device.create') }}" class="btn btn-success" style="left: 5px">Novo Aparelho</a>
        </div>
    </div>
    <table class="table table-responsive-xl">
        <tr>
            <td>#ID</td>
            <td>Aparelho</td>
            <td>Ações</td>
        </tr>
        @foreach($devices as $device)
            <tr>
                <td>{{ $device->id }}</td>
                <td>{{ $device->description }}</td>
                <td>
                    <form action="{{ route('device.destroy', ['device' => $device->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" alt="Excluir">Excluir</button>
                        <a href="{{ route('device.edit', ['device' => $device->id]) }}"
                           class="btn btn-success">Editar</a>
                        <a href="{{ route('device.show', ['device' => $device->id]) }}" class="btn btn-primary">Ver</a>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
