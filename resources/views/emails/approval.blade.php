<header style="background-color: #6c9fff;color: white;height: 70px;">
    <h2 style="height: 4.375rem;text-decoration: none;font-size: 1rem;font-weight: 800;padding: 1.5rem 1rem;text-align: center;text-transform: uppercase;letter-spacing: .05rem;z-index: 1;">OS Interativa</h2>
</header>
<main>
    <br>
    <h2>O orçamento do seu equipamento já está pronto.</h2><br><br>
    <h3>Dados do equipamento</h3>
    <strong>Equipamento: </strong>{{$service->device->description}}<br>
    <strong>Defeito constatado: </strong> {{$service->technicalReport}}<br>
    <br>
    <h3>Itens a ser substituídos</h3>
    <table style="margin-top: 10px;width: 60%;max-width: 100%;margin-bottom: 1rem;background-color: transparent;border-collapse: collapse;display: table;border-collapse: separate;box-sizing: border-box;text-indent: initial;border-spacing: 2px;border-color: grey;">
        <thead align="left">
        <tr>
            <th>Produto</th>
            <th>Quantidade</th>
        </tr>
        </thead>
        <tbody>
        @php
            $totalService = $service->servicePrice;
        @endphp
        @foreach($service->products as $serviceProduct)
            <tr>
                <td>{{$serviceProduct->description}}</td>
                <td>{{$serviceProduct->pivot->quantity}}</td>
            </tr>
            @php
                $totalService += $serviceProduct->pivot->value*$serviceProduct->pivot->quantity;
            @endphp
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td><h2><b>Total geral</b></h2></td>
                <td><h2>{{number_format($totalService, 2, ',', '.')}}</h2></td>
            </tr>
        </tfoot>
    </table>
    <p align="center" style="width: 60%"><a href="{{route('service.approval', $service->id)}}" style="text-decoration:none;text-transform: none;color: #fff;background-color: #007bff;border-color: #007bff;display: inline-block;font-weight: 400;text-align: center;white-space: nowrap;vertical-align: middle;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;border: 1px solid transparent;padding: .375rem .75rem;font-size: 1rem;line-height: 1.5;border-radius: .25rem;transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;">Aprovar orçamento</a></p>
</main>
<footer style="padding:3px;vertical-align:middle;background-color: #6c9fff;color: white;height: 40px;">
    <h4>&copy; OS Interativa. 2021</h4>
</footer>

