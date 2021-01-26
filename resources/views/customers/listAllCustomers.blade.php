@extends('home')
@section('content')
{{--    <h2>Listagem de Clientes</h2>--}}
    <p><a href="{{route('customer.create')}}" class="btn btn-success">Novo Cliente</a></p>
<table class="table table-responsive-xl">
        <tr>
            <td>#ID</td>
            <td>Nome</td>
            <td>Telefone</td>
            <td>Celular</td>
            <td>E-mail</td>
            <td>Ações</td>
        </tr>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->fullName }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->cellPhone }}</td>
                <td>{{ $customer->email }}</td>
                <td>
                    <form action="{{ route('customer.destroy', ['customer' => $customer->id]) }}"method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" alt="Excluir">Excluir</button>
                        <a href="{{ route('customer.edit', ['customer' => $customer->id]) }}" class="btn btn-success">Editar</a>
                        <a href="{{ route('customer.show', ['customer' => $customer->id]) }}" class="btn btn-primary">Ver</a>
                    </form>
                </td>
            </tr>
        @endforeach
</table>
@endsection
