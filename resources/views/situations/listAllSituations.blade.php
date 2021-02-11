@extends('home')

@section('content')
    <h3>Consulta de Situações</h3>
    <div class="input-group mb-3" style="width: 500px">
        <input type="text" class="form-control" placeholder="Infome o termo a ser pesquisado" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
            <a href="{{ route('situation.create') }}" class="btn btn-success" style="left: 5px">Nova Situação</a>
        </div>
    </div>
    <table class="table table-responsive-xl">
        <tr>
            <td>#ID</td>
            <td>Situação</td>
            <td>Ações</td>
        </tr>
        @foreach($situations as $situation)
            <tr>
                <td>{{ $situation->id }}</td>
                <td>{{ $situation->description }}</td>
                <td>
                    <form action="{{ route('situation.destroy', ['situation' => $situation->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" alt="Excluir">Excluir</button>
                        <a href="{{ route('situation.edit', ['situation' => $situation->id]) }}"
                           class="btn btn-success">Editar</a>
                        <a href="{{ route('situation.show', ['situation' => $situation->id]) }}" class="btn btn-primary">Ver</a>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
