@extends('home')

@section('content')
    <h3>Cadastro de Marca</h3>
    <form action="{{ route('brand.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <label for="description">Marca:</label>
                <input type="text" name="description" id="" class="form-control" placeholder="Digite a marca">
            </div>
        </div>

        <div class="row" style="margin-top: 10px">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{route('brand.index')}}" class="btn btn-danger">Cancelar</a>
            </div>

        </div>
    </form>
@endsection
