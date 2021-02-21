@extends('home')

@section('content')
    <h3>Visualização de Serviço</h3>

    <a href="{{route('service.index')}}" class="btn btn-danger">Voltar</a>
    <a href="" class="btn btn-outline-primary">Solicitar aprovação</a>
    <a href="" class="btn btn-outline-dark">Finalizar</a>

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
        <div class="row">
            <div class="col-6">
                <label for="technicalReport">Defeito constatado:</label>
                <input type="text" name="technicalReport" id="" class="form-control"
                       value="{{ $service->technicalReport }}" disabled>
            </div>
            <div class="col-6">
                <label for="fullName">Técnico reparador:</label>
                <input type="text" name="fullName" id="" class="form-control"
                       value="{{ $service->expert->fullName }}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label for="dateTechnicalReport">Data do orçamento:</label>
                <input type="text" name="dateTechnicalReport" id="" class="form-control"
                       value="{{date('d/m/Y', strtotime($service->dateTechnicalReport))   }}" disabled>
            </div>
            <div class="col-3">
                <label for="servicePrice">Valor do serviço:</label>
                <input type="text" name="servicePrice" id="" class="form-control" value="{{ $service->servicePrice }}" disabled>
            </div>
        </div>
    </form>

    
    <div class="row" style="margin-top: 30px">
        <div class="col-6">
            <form method="post" action="{{route('serviceproduct.store')}}" class="form-inline">
                @csrf
                <input type="hidden" name="service_id" value="{{$service->id}}">
                <select name="product_id" id="cmbproduto" class="form-control" style="margin-left: 5px">
                    <option value="0">Selecione um produto</option>
                    @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->description}}</option>
                    @endforeach
                </select>
                <input type="number" name="quantity" min="1" id="" class="form-control" placeholder="Quantidade" style="margin-left: 5px">
                <input type="number" name="value" id="salePrice" class="form-control" placeholder="Valor Unit." readonly="true" style="margin-left: 5px">
                <button class="btn btn-success" style="margin-left: 5px">Adicionar</button>
            </form>
            <table class="table table-hover" style="margin-top: 10px">
                <thead>
                    <tr>
                        <th>Data Inclusão</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Valor Unit.</th>
                        <th>-</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($service->products as $serviceProduct)
                    <tr>
                        <td>{{$serviceProduct->created_at}}</td>
                        <td>{{$serviceProduct->description}}</td>
                        <td>{{$serviceProduct->pivot->quantity}}</td>
                        <td>{{$serviceProduct->pivot->value}}</td>
                        <td>
                            <form method="post" action="{{route('serviceproduct.destroy', ['serviceid'=>$service->id, 'productid'=>$serviceProduct->pivot->product_id])}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger" alt="Excluir" title="Excluir"><i class="material-icons">delete</i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-6">
            <form method="post" action="{{route('servicesituation.store')}}" class="form-inline">
                @csrf
                <input type="hidden" name="service_id" value="{{$service->id}}">
                <select name="situation_id" id="" class="form-control" style="margin-left: 5px">
                    <option value="0">Selecione uma situação</option>
                    @foreach($situations as $situation)
                        <option value="{{$situation->id}}">{{$situation->description}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-success" style="margin-left: 5px">Adicionar</button>
            </form>
            <table class="table table-hover" style="margin-top: 10px">
                <thead>
                <tr>
                    <th>Data Inclusão</th>
                    <th>Situação</th>
                    <th>-</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($service->situations as $situation)
                        <tr>
                            <td>{{$situation->created_at}}</td>
                            <td>{{$situation->description}}</td>
                            <td>
                                <form method="post" action="{{route('servicesituation.destroy', ['serviceid'=>$service->id, 'situationid'=>$situation->pivot->situation_id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" alt="Excluir" title="Excluir"><i class="material-icons">delete</i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function formatarValor(valor) {
            var str = parseFloat(valor).toFixed(2);
            return str;
        }
        $(document).ready(function(){
            $('#cmbproduto').change(function(){
                var product_id = $('#cmbproduto').val();
                $('#salePrice').val('teste');
                $.ajax({
                    type: 'GET',
                    url: "{{url('produto/')}}"+'/'+product_id,
                    dataType: 'json',
                    success: function(data) {
                        $('#salePrice').val(formatarValor(data.salePrice));
                        //alert(data.description);
                    },
                    error: function(){
                        alert('Selecione um produto');
                    }
                });
            });
        });
    </script>
@endsection
