@extends('home')

@section('content')
    <h3>Edição de Serviço</h3>
    <form action="{{ route('service.update', ['service' => $service->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                <label for="expert_id">Cliente:</label>
                <select name="customer_id" id="customer_id" class="form-control">
                    @foreach($customers as $customer)
                        @if($service->customer->id == $customer->id)
                            <option value="{{$customer->id}}" selected>{{$customer->fullName}}</option>
                        @else
                            <option value="{{$customer->id}}">{{$customer->fullName}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <label for="device_id">Aparelho:</label>
                <select name="device_id" id="device_id" class="form-control">
                    @foreach($devices as $device)
                        @if($service->device->id == $device->id)
                            <option value="{{$device->id}}" selected>{{$device->description}}</option>
                        @else
                            <option value="{{$device->id}}">{{$device->description}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <label for="brand_id">Marca:</label>
                <select name="brand_id" id="brand_id" class="form-control">
                    @foreach($brands as $brand)
                        @if($service->brand->id == $brand->id)
                            <option value="{{$brand->id}}" selected>{{$brand->description}}</option>
                        @else
                            <option value="{{$brand->id}}">{{$brand->description}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label for="template_id">Aparelho:</label>
                <select name="template_id" id="template_id" class="form-control">
                    @foreach($templates as $template)
                        @if($service->template->id == $template->id)
                            <option value="{{$template->id}}" selected>{{$template->description}}</option>
                        @else
                            <option value="{{$template->id}}">{{$template->description}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <label for="serial">Serial:</label>
                <input type="text" name="serial" id="" class="form-control" value="{{ $service->serial }}">
            </div>
            <div class="col-6">
                <label for="claimedDefect">Defeito reclamado:</label>
                <input type="text" name="claimedDefect" id="" class="form-control"
                       value="{{ $service->claimedDefect }}">
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{route('service.index')}}" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </form>
    <br>

    <p><a href="{{route('service.create')}}" class="btn btn-success">Novo Item</a></p>
    <table class="table table-responsive-xl">
        <tr>
            <td>Produto</td>
            <td>QNTD</td>
            <td>Valor</td>
            <td>Total</td>
            <td>Ações</td>
        </tr>
        @foreach($itemServices as $itemService)
            <tr>
                <td>{{ $itemService->product->description}}</td>
                <td>{{ $itemService->quantity }}</td>
                <td>{{ $itemService->value }}</td>
                <td>{{ $itemService->value * $itemService->quantity}}</td>
                <td>
                    <form action="#"method="#">
{{--                        {{ route('itemService.destroy', ['itemService' => $itemService->product_id]) }}    --}}
{{--                        @csrf--}}
{{--                        @method('DELETE')--}}
                        <button class="btn btn-danger" alt="Excluir">Excluir</button>
                        <a href="#" class="btn btn-success">Editar</a>
                        <a href="#" class="btn btn-primary">Ver</a>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
{{--{{ route('itemService.edit', ['itemService' => $itemService->product_id]) }}--}}
{{--{{ route('itemService.show', ['itemService' => $itemService->product_id]) }}--}}
