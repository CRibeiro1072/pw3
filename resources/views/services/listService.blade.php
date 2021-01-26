@extends('home')

@section('content')
    <h1>Visualização de Serviço</h1>
<form>
    <div class="row">
        <div class="col-12">
            <label for="id">Status:</label>
            <input type="text" name="id" id="" class="form-control" value="{{ $service->status }}" disabled>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="customer">Cliente:</label>
            <input type="text" name="customer" id="" class="form-control" value="{{ $service->customer->fullName }}" disabled>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <label for="gadget">Aparelho:</label>
            <input type="text" name="gadget" id="" class="form-control" value="{{ $service->gadget->equipment }}" disabled>
        </div>
        <div class="col-6">
            <label for="expert">Técnico:</label>
            <input type="text" name="expert" id="" class="form-control" value="{{ $service->expert->fullName }}" disabled>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="claimedDefect">Defeito reclamado:</label>
            <input type="text" name="claimedDefect" id="" class="form-control" value="{{ $service->claimedDefect }}" disabled>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="technicalReport">Defeito constatado:</label>
            <input type="text" name="technicalReport" id="" class="form-control" value="{{ $service->technicalReport }}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <label for="dateTechnicalReport">Data do laudo:</label>
            <input type="text" name="dateTechnicalReport" id="" class="form-control" value="{{ $service->dateTechnicalReport }}" disabled>
        </div>
    </div>
    <div class="row" style="margin-top: 10px">
        <div class="col-12">
            <a href="{{route('service.index')}}" class="btn btn-primary">Sair</a>
        </div>

    </div>
</form>
@endsection
