@extends('home')

@section('content')
    <h3>Edição de Técnico</h3>
    <form action="{{ route('expert.update', ['expert' => $expert->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-3">
                <label for="function">Função:</label>
                <input type="text" name="function" id="" class="form-control" value="{{ $expert->function }}">
            </div>
            <div class="col-9">
                <label for="fullName">Nome:</label>
                <input type="text" name="fullName" id="" class="form-control" value="{{ $expert->fullName }}">
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <label for="phone">Telefone:</label>
                <input type="number" name="phone" id="" class="form-control" value="{{ $expert->phone }}">
            </div>
            <div class="col-2">
                <label for="cellPhone">Celular:</label>
                <input type="number" name="cellPhone" id="" class="form-control" value="{{ $expert->cellPhone }}">
            </div>
            <div class="col-6">
                <label for="email">E-Mail:</label>
                <input type="email" name="email" id="" class="form-control" value="{{ $expert->email }}">
            </div>
            <div class="col-2">
                <label for="percent">Porcentagem:</label>
                <input type="number" step="0.01" name="percent" id="" class="form-control"
                       value="{{ $expert->percent }}">
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-12">
                {{--    <input type="submit" value="Cadastrar cliente">--}}
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{route('expert.index')}}" class="btn btn-danger">Cancelar</a>
            </div>

        </div>
    </form>
@endsection
