@extends('home')

@section('content')
    <p><a href="{{ route('template.create') }}" class="btn btn-success">Novo Modelo</a></p>
    <table class="table table-responsive-xl">
        <tr>
            <td>#ID</td>
            <td>Modelo</td>
            <td>Ações</td>
        </tr>
        @foreach($templates as $template)
            <tr>
                <td>{{ $template->id }}</td>
                <td>{{ $template->description }}</td>
                <td>
                    <form action="{{ route('template.destroy', ['template' => $template->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" alt="Excluir">Excluir</button>
                        <a href="{{ route('template.edit', ['template' => $template->id]) }}"
                           class="btn btn-success">Editar</a>
                        <a href="{{ route('template.show', ['template' => $template->id]) }}" class="btn btn-primary">Ver</a>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
