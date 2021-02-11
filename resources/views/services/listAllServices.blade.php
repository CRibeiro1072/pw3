@extends('home')

@section('content')
    <h3>Consulta de Serviços</h3>
    <div class="input-group mb-3" style="width: 500px">
        <input type="text" class="form-control" placeholder="Infome o termo a ser pesquisado" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
            <a href="{{route('service.create')}}" class="btn btn-success" style="left: 5px">Novo Serviço</a>
        </div>
    </div>
<table class="table table-responsive-xl">
        <tr>
            <td>#ID</td>
            <td>Cliente</td>
            <td>Aparelho</td>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Serial</td>
            <td>Defeito Reclamado</td>
            <td>Ações</td>
        </tr>

        @foreach($services as $service)

            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->customer->fullName}}</td>
                <td>{{ $service->device->description }}</td>
                <td>{{ $service->brand->description }}</td>
                <td>{{ $service->template->description }}</td>
                <td>{{ $service->serial }}</td>
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
