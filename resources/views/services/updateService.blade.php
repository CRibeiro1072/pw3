@extends('home')

@section('content')
    <h1>Edição de Serviço</h1>
    <form action="{{ route('service.update', ['service' => $service->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-3">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-control">
                    <option value="{{$service->status}}">{{$service->status}}</option>
                    <option value="PENDENTE">PENDENTE</option>
                    <option value="CONCLUIDO">CONCLUIDO</option>
                    <option value="RETIRADO">RETIRADO</option>
                </select>
            </div>
            <div class="col-3">
                <label for="expert_id">Cliente:</label>
                <select name="customer_id" id="customer_id" class="form-control">
                    <option value="{{$service->customer->id}}">{{$service->customer->fullName}}</option>
                    @foreach($customers as $customer)
                        <option value="{{$customer->id}}">{{$customer->fullName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <label for="gadget_id">Aparelho:</label>
                <select name="gadget_id" id="gadget_id" class="form-control">
                    <option value="{{$service->gadget->id}}">{{$service->gadget->equipment}}</option>
                    @foreach($gadgets as $gadget)
                        <option value="{{$gadget->id}}">{{$gadget->equipment}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <label for="expert_id">Técnico:</label>
                <select name="expert_id" id="expert_id" class="form-control">
                    <option value="{{$service->expert->id}}">{{$service->expert->fullName}}</option>
                    @foreach($experts as $expert)
                        <option value="{{$expert->id}}">{{$expert->fullName}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label for="claimedDefect">Defeito reclamado:</label>
                <input type="text" name="claimedDefect" id="" class="form-control" value="{{ $service->claimedDefect }}">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <label for="technicalReport">Defeito constatado:</label>
                <input type="text" name="technicalReport" id="" class="form-control" value="{{ $service->technicalReport }}">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label for="dateTechnicalReport">Data do laudo:</label>
                <input type="text" name="dateTechnicalReport" id="" class="form-control"value="{{ $service->dateTechnicalReport }}">
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{route('service.index')}}" class="btn btn-danger">Cancelar</a>
            </div>

        </div>
    </form>
@endsection
