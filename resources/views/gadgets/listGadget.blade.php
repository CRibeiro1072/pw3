@extends('home')

@section('content')
    <h1>Visualização de Aparelho</h1>
<form>
    <div class="row">
        <div class="col-12">
            <label for="equipment">Equipamento:</label>
            <input type="text" name="equipment" id="" class="form-control" value="{{ $gadget->equipment }}" disabled>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="brand">Marca:</label>
            <input type="text" name="brand" id="" class="form-control" value="{{ $gadget->brand }}" disabled>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <label for="model">Modelo:</label>
            <input type="text" name="model" id="" class="form-control" value="{{ $gadget->model }}" disabled>
        </div>
        <div class="col-6">
            <label for="serial">Serial:</label>
            <input type="text" name="serial" id="" class="form-control" value="{{ $gadget->serial }}" disabled>
        </div>
    </div>
    <div class="row" style="margin-top: 10px">
        <div class="col-12">
            <a href="{{route('gadget.index')}}" class="btn btn-primary">Sair</a>
            </div>
            </div>
</form>
@endsection
