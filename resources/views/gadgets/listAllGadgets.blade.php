@extends('home')

@section('content')
    <p><a href="{{route('gadget.create')}}" class="btn btn-success">Novo Aparelho</a></p>
<table class="table table-responsive-xl">
        <tr>
            <td>#ID</td>
            <td>Equipamento</td>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Serial</td>
            <td>Ações</td>
        </tr>

        @foreach($gadgets as $gadget)

            <tr>
                <td>{{ $gadget->id }}</td>
                <td>{{ $gadget->equipment }}</td>
                <td>{{ $gadget->brand }}</td>
                <td>{{ $gadget->model }}</td>
                <td>{{ $gadget->serial }}</td>
                <td>
                    {{--                    <a href="{{ route('customer.show', ['customer' => $customer->id]) }}">Ver Usuario</a>--}}
                    <form action="{{ route('gadget.destroy', ['gadget' => $gadget->id]) }}"method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" alt="Excluir">Excluir</button>
                        <a href="{{ route('gadget.edit', ['gadget' => $gadget->id]) }}" class="btn btn-success">Editar</a>
                        <a href="{{ route('gadget.show', ['gadget' => $gadget->id]) }}" class="btn btn-primary">Ver</a>
                    </form>
                </td>
            </tr>
        @endforeach
</table>
@endsection
