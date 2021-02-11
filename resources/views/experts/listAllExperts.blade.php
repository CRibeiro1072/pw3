@extends('home')

@section('content')
    <h3>Consulta de Técnicos</h3>
    <div class="input-group mb-3" style="width: 500px">
        <input type="text" class="form-control" placeholder="Infome o termo a ser pesquisado" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
            <a href="{{route('expert.create')}}" class="btn btn-success" style="left: 5px">Novo Técnico</a>
        </div>
    </div>
<table class="table table-responsive-xl">
        <tr>
            <td>#ID</td>
            <td>Função</td>
            <td>Nome</td>
            <td>Telefone</td>
            <td>Celular</td>
            <td>E-mail</td>
            <td>Porcentagem</td>
            <td>Ações</td>
        </tr>

        @foreach($experts as $expert)

            <tr>
                <td>{{ $expert->id }}</td>
                <td>{{ $expert->function }}</td>
                <td>{{ $expert->fullName }}</td>
                <td>{{ $expert->phone }}</td>
                <td>{{ $expert->cellPhone }}</td>
                <td>{{ $expert->email }}</td>
                <td>{{ $expert->percent }}</td>
                <td>
                    <form action="{{ route('expert.destroy', ['expert' => $expert->id]) }}"method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" alt="Excluir">Excluir</button>
                        <a href="{{ route('expert.edit', ['expert' => $expert->id]) }}" class="btn btn-success">Editar</a>
                        <a href="{{ route('expert.show', ['expert' => $expert->id]) }}" class="btn btn-primary">Ver</a>
                    </form>
                </td>
            </tr>
        @endforeach
</table>
@endsection
