@extends('home')

@section('content')
    <p><a href="{{route('service.create')}}" class="btn btn-success">Novo Serviço</a></p>
<table class="table table-responsive-xl">
        <tr>
            <td>#ID</td>
            <td>Status</td>
            <td>Cliente</td>
            <td>aparelho</td>
            <td>Técnico</td>
            <td>Defeito Reclamado</td>
            <td>Ações</td>
        </tr>

        @foreach($services as $service)

            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->status }}</td>
                <td>{{ $service->customer->fullName}}</td>
                <td>{{ $service->gadget->equipment }}</td>
                <td>{{ $service->expert->fullName }}</td>
                <td>{{ $service->claimedDefect }}</td>
                <td>
                    <form action="{{ route('service.destroy', ['service' => $service->id]) }}"method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" alt="Excluir">Excluir</button>
                        <a href="{{ route('service.edit', ['service' => $service->id]) }}" class="btn btn-success">Editar</a>
                        <a href="{{ route('service.show', ['service' => $service->id]) }}" class="btn btn-primary">Ver</a>
                    </form>
                </td>
            </tr>
        @endforeach
</table>
@endsection
