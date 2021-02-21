@extends('home')

@section('content')
    <h3>Cadastro de Serviço</h3>
    <form action="{{ route('service.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-6">
                <label for="expert_id">Cliente:</label>
                <select name="customer_id" id="customer_id" class="form-control">
                    <option>Selecione o cliente</option>
                    @foreach($customers as $customer)
                        <option value="{{$customer->id}}">{{$customer->fullName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <label for="gadget_id">Aparelho:</label>
                <select name="device_id" id="device_id" class="form-control">
                    <option>Selecione o aparelho</option>
                    @foreach($devices as $device)
                        <option value="{{$device->id}}">{{$device->description}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <label for="expert_id">Técnico:</label>
                <select name="expert_id" id="expert_id" class="form-control">
                    <option>Selecione o técnico</option>
                    @foreach($experts as $expert)
                        <option value="{{$expert->id}}">{{$expert->fullName}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label for="brand_id">Marca:</label>
                <select name="brand_id" id="brand_id" class="form-control">
                    <option>Selecione a marca</option>
                    @foreach($brands as $brand)
                        <option value="{{$brand->id}}">{{$brand->description}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <label for="template_id">Modelo:</label>
                <select name="template_id" id="template_id" class="form-control">
                    <option>Selecione o modelo</option>
                    @foreach($templates as $template)
                        <option value="{{$template->id}}">{{$template->description}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6">
                <label for="serial">Serial:</label>
                <input type="text" name="serial" id="" class="form-control" placeholder="Infome o número de série">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label for="claimedDefect">Defeito reclamado:</label>
                <textarea name="claimedDefect" id="" class="form-control" placeholder="Infome o defeito reclamado pelo o cliente"></textarea>
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
