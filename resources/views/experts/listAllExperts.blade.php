@extends('home')

@section('content')
    <p><a href="{{route('expert.create')}}" class="btn btn-success">Novo Técnico</a></p>
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
