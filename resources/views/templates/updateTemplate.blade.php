@extends('home')

@section('content')
    <h3>Edição de Modelo</h3>
    <form action="{{ route('template.update', ['template' => $template->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <label for="description">Modelo:</label>
                <input type="text" name="description" id="" class="form-control" value="{{ $template->description }}">
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
