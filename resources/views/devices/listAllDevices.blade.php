@extends('home')

@section('content')
    <p><a href="{{ route('device.create') }}" class="btn btn-success">Novo Aparelho</a></p>
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
