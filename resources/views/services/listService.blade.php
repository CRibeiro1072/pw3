@extends('home')

@section('content')
    <h3>Visualização de Serviço</h3>
    <form>
        <div class="row">
            <div class="col-6">
                <label for="customer">Cliente:</label>
                <input type="text" name="customer" id="" class="form-control" value="{{ $service->customer->fullName }}"
                       disabled>
            </div>
            <div class="col-3">
                <label for="description">Aparelho:</label>
                <input type="text" name="description" id="" class="form-control"
                       value="{{ $service->device->description }}" disabled>
            </div>
            <div class="col-3">
                <label for="description">Marca:</label>
                <input type="text" name="description" id="" class="form-control"
                       value="{{ $service->brand->description }}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label for="template">Modelo:</label>
                <input type="text" name="template" id="" class="form-control"
                       value="{{ $service->template->description }}" disabled>
            </div>
            <div class="col-3">
                <label for="serial">Serial:</label>
                <input type="text" name="serial" id="" class="form-control" value="{{ $service->serial }}" disabled>
            </div>
            <div class="col-6">
                <label for="claimedDefect">Defeito reclamado:</label>
                <input type="text" name="claimedDefect" id="" class="form-control" value="{{ $service->claimedDefect }}"
                       disabled>
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-12">
                <a href="{{route('service.index')}}" class="btn btn-primary">Sair</a>
            </div>

        </div>
    </form>
@endsection
