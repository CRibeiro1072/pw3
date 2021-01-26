@extends('home')

@section('content')
    <h1>Cadastro de Aparelho</h1>
<form action="{{ route('gadget.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <label for="equipment">Equipamento:</label>
            <input type="text" name="equipment" id="" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="brand">Marca:</label>
            <input type="text" name="brand" id="" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <label for="model">Modelo:</label>
            <input type="text" name="model" id="" class="form-control">
        </div>
        <div class="col-6">
            <label for="serial">Serial:</label>
            <input type="text" name="serial" id="" class="form-control">
        </div>
    </div>
    <div class="row" style="margin-top: 10px">
        <div class="col-12">
{{--    <input type="submit" value="Cadastrar cliente">--}}
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="{{route('gadget.index')}}" class="btn btn-danger">Cancelar</a>
            </div>

            </div>
</form>
@endsection
