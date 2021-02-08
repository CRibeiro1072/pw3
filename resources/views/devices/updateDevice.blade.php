@extends('home')

@section('content')
    <h3>Edição de Aparelho</h3>
    <form action="{{ route('device.update', ['device' => $device->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <label for="description">Aparelho:</label>
                <input type="text" name="description" id="" class="form-control" value="{{ $device->description }}">
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{route('device.index')}}" class="btn btn-danger">Cancelar</a>
            </div>

        </div>
    </form>
@endsection
