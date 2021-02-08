@extends('home')

@section('content')
    <h3>Cadastro de Modelo</h3>
    <form action="{{ route('template.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <label for="description">Modelo:</label>
                <input type="text" name="description" id="" class="form-control">
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{route('template.index')}}" class="btn btn-danger">Cancelar</a>
            </div>

        </div>
    </form>
@endsection
