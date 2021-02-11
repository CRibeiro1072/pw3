@extends('home')

@section('content')
    <h3>Visualização de Cliente</h3>
    <form>
        <div class="row">
            <div class="col-12">
                <label for="fullName">Nome:</label>
                <input type="text" name="fullName" id="" class="form-control"value="{{ $customer->fullName }}"
                       disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="address">Endereço:</label>
                <input type="text" name="address" id="" class="form-control" value="{{ $customer->address }}" disabled>
            </div>
            <div class="col-4">
                <label for="district">Bairro:</label>
                <input type="text" name="district" id="" class="form-control" value="{{ $customer->district }}" disabled>
            </div>
            <div class="col-2">
                <label for="state">UF:</label>
                <input type="text" name="state" id="" class="form-control" value="{{ $customer->state }}" disabled>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <label for="phone">Telefone:</label>
                <input type="number" name="phone" id="" class="form-control"value="{{ $customer->phone }}" disabled>
            </div>
            <div class="col-3">
                <label for="cellPhone">Celular:</label>
                <input type="number" name="cellPhone" id="" class="form-control"value="{{ $customer->cellPhone }}"
                       disabled>
            </div>
            <div class="col-6">
                <label for="email">E-Mail:</label>
                <input type="email" name="email" id="" class="form-control"value="{{ $customer->email }}" disabled>
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <label for="fullName">Nome:</label>--}}
{{--                <input type="text" name="fullName" id="" class="form-control" value="{{ $customer->fullName }}"--}}
{{--                       disabled>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-6">--}}
{{--                <label for="phone">Telefone:</label>--}}
{{--                <input type="text" name="phone" id="" class="form-control" value="{{ $customer->phone }}" disabled>--}}
{{--            </div>--}}
{{--            <div class="col-6">--}}
{{--                <label for="cellPhone">Celular:</label>--}}
{{--                <input type="text" name="cellPhone" id="" class="form-control" value="{{ $customer->cellPhone }}"--}}
{{--                       disabled>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <label for="email">E-Mail:</label>--}}
{{--                <input type="email" name="email" id="" class="form-control" value="{{ $customer->email }}" disabled>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="row" style="margin-top: 10px">
            <div class="col-12">
                <a href="{{route('customer.index')}}" class="btn btn-primary">Sair</a>
            </div>
        </div>
    </form>
@endsection
