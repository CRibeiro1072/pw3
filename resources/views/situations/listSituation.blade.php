@extends('home')

@section('content')
    <h3>Visualização de Situação</h3>
    <form>
        <div class="row">
            <div class="col-12">
                <label for="description">Marca:</label>
                <input type="text" name="description" id="" class="form-control" value="{{ $situation->description }}"
                       disabled>
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-12">
                <a href="{{route('situation.index')}}" class="btn btn-primary">Sair</a>
            </div>
        </div>
    </form>
@endsection
