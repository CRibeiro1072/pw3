@extends('home')

@section('content')
    <h3>Cadastro de Situação</h3>
    <form action="{{ route('situation.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <label for="description">Marca:</label>
                <input type="text" name="description" id="" class="form-control" placeholder="Digite a situação">
            </div>
        </div>

        <div class="row" style="margin-top: 10px">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{route('situation.index')}}" class="btn btn-danger">Cancelar</a>
            </div>

        </div>
    </form>
@endsection
