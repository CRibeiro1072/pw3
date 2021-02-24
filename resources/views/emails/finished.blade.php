<header style="background-color: #6c9fff;color: white;height: 70px;">
    <h2 style="height: 4.375rem;text-decoration: none;font-size: 1rem;font-weight: 800;padding: 1.5rem 1rem;text-align: center;text-transform: uppercase;letter-spacing: .05rem;z-index: 1;">OS Interativa</h2>
</header>
<main>
    <br>
    <h2>Seu equipamento já está pronto.</h2><br><br>
    @php
        $totalService = $service->servicePrice;
    @endphp
    @foreach($service->products as $serviceProduct)
        @php
            $totalService += $serviceProduct->pivot->value*$serviceProduct->pivot->quantity;
        @endphp
    @endforeach
    <h3>Total do serviço: R$ {{number_format($totalService, 2, ',', '.')}}</h3>

</main>
<footer style="padding:3px;vertical-align:middle;background-color: #6c9fff;color: white;height: 40px;">
    <h4>&copy; OS Interativa. 2021</h4>
</footer>

