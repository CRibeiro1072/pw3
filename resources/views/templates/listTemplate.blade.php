@extends('home')

@section('content')
    <h3>Visualização de Modelo</h3>
    <form>
        <div class="row">
            <div class="col-12">
                <label for="description">Modelo:</label>
                <input type="text" name="description" id="" class="form-control" value="{{ $template->description }}"
                       disabled>
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-12">
                <a href="{{route('template.index')}}" class="btn btn-primary">Sair</a>
            </div>
        </div>
    </form>
@endsection
