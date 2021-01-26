@extends('home')

@section('content')
    <h1>Visualização de Técnico</h1>
    <form>
        <div class="row">
            <div class="col-12">
                <label for="function">Nome:</label>
                <input type="text" name="function" id="" class="form-control" value="{{ $expert->function }}" disabled>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <label for="fullName">Nome:</label>
                <input type="text" name="fullName" id="" class="form-control" value="{{ $expert->fullName }}" disabled>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label for="phone">Telefone:</label>
                <input type="text" name="phone" id="" class="form-control" value="{{ $expert->phone }}" disabled>
            </div>
            <div class="col-6">
                <label for="cellPhone">Celular:</label>
                <input type="text" name="cellPhone" id="" class="form-control" value="{{ $expert->cellPhone }}" disabled>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <label for="email">E-Mail:</label>
                <input type="email" name="email" id="" class="form-control" value="{{ $expert->email }}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label for="percent">E-Mail:</label>
                <input type="text" name="percent" id="" class="form-control" value="{{ $expert->percent }}" disabled>
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-12">
                <a href="{{route('expert.index')}}" class="btn btn-primary">Sair</a>
            </div>

        </div>
    </form>
@endsection
