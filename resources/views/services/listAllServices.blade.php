@extends('home')

@section('content')
    <h3>Consulta de Serviços</h3>
    <div class="input-group mb-3" style="width: 500px">
            <a href="{{route('service.create')}}" class="btn btn-success" style="left: 5px">Novo Serviço</a>
    </div>
    <table class="table table-responsive-xl">
            <tr>
                <td>#ID</td>
                <td>Cliente</td>
                <td>Aparelho</td>
                <td>Marca</td>
                <td>Modelo</td>
                <td>Técnico</td>
                <td>Defeito Reclamado</td>
                <td>Ações</td>
            </tr>

            @foreach($services as $service)

                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->customer->fullName}}</td>
                    <td>{{ $service->device->description }}</td>
                    <td>{{ $service->brand->description }}</td>
                    <td>{{ $service->template->description }}</td>
                    <td>{{ $service->expert->fullName }}</td>
                    <td>{{ $service->claimedDefect }}</td>
                    <td>
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <button class="btn btn-danger" data-record-id="{{$service->id}}" data-toggle="modal" data-target="#confirm-delete" alt="Excluir" title="Excluir">
                            <i class="material-icons">delete</i>
                        </button>
                        {{--<form action="{{ route('service.destroy', ['service' => $service->id]) }}" method="post">--}}
                            {{--@csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-delete" alt="Excluir" title="Excluir"><i class="material-icons">delete</i></button>--}}
                            <a href="{{ route('service.edit', ['service' => $service->id]) }}" class="btn btn-success" alt="Editar" title="Editar"><i class="material-icons">edit</i></a>
                            <a href="{{ route('service.show', ['service' => $service->id]) }}" class="btn btn-primary" alt="Gerenciar" title="Gerenciar"><i class="material-icons">attach_money</i></a>
                        {{--</form>--}}
                    </td>
                </tr>
            @endforeach
    </table>
@endsection
@section('scripts')
    <script>
        $(".btn-delete").click( function(event) {
            var apagar = confirm('Ao excluir esse registro todos os lançamentos de peças e status do serviço serão excluídos.\n\nDeseja realmente excluir?');
            if (!apagar){
                event.preventDefault();
            }
        });
    </script>
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Confirmar Exclusão</h4>
                </div>
                <div class="modal-body">
                    <p>Ao excluir esse registro todos os lançamentos de peças e status do serviço serão excluídos.</p>
                    <p>Deseja realmente excluir?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger btn-ok">Excluir</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#confirm-delete').on('click', '.btn-ok', function(e) {
            var $modalDiv = $(e.delegateTarget);
            var id = $(this).data('recordId');
            var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
                url: "{{url('servicos/')}}" + '/' + id,
                type: 'DELETE',
                data: {
                    "id": id,
                    "_token": token,
                },
                dataType: 'html',
                success: function (){
                    location.reload();
                }
            });
            // $.post('/api/record/' + id).then()
            $modalDiv.addClass('loading');
            setTimeout(function() {
                $modalDiv.modal('hide').removeClass('loading');
            }, 1000)
        });
        $('#confirm-delete').on('show.bs.modal', function(e) {
            var data = $(e.relatedTarget).data();
            $('.title', this).text(data.recordTitle);
            $('.btn-ok', this).data('recordId', data.recordId);
        });
    </script>
@endsection
