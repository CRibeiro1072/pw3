@extends('home')

@section('content')
    <h1>Edição de Produto</h1>
<form action="{{ route('gadget.update', ['gadget' => $gadget->id]) }}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <label for="equipment">Equipamento:</label>
            <input type="text" name="equipment" id="" class="form-control" value="{{ $gadget->equipment }}">
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="brand">Marca:</label>
            <input type="text" name="brand" id="" class="form-control" value="{{ $gadget->brand }}">
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <label for="model">Modelo:</label>
            <input type="text" name="model" id="" class="form-control" value="{{ $gadget->model }}">
        </div>
        <div class="col-6">
            <label for="serial">Serial:</label>
            <input type="text" name="serial" id="" class="form-control" value="{{ $gadget->serial }}">
        </div>
    </div>
    <div class="row" style="margin-top: 10px">
        <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="{{route('gadget.index')}}" class="btn btn-danger">Cancelar</a>
            </div>

            </div>
</form>
@endsection
