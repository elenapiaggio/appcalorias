@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Listado de alimentos</div>

                    <!-- Si la sesión tiene un mensaje
                    imprimimos el mensaje
                    -->

                    @if (Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif

                    <div class="panel-body">
                        <p>
                            <a class="btn btn-info" href="{{route('food.list.create')}}" role="button">Alta Alimento </a>
                        </p>
                        <p>Hay {{ $foods->lastPage()}} páginas</p>
                        <p>Hay {{ $foods->total()}} registros</p>
                        @include('food.partials.table')
                        <!-- la función render() se encarga de la paginación-->
                        {!! str_replace('/?', '?',  $foods->render()) !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{!! Form::open(['route' => ['profile.form.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'form-delete' ]) !!}

{!! Form::close() !!}



@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(e){ 	// esta función anónima tiene un método que es
            // el preventDefault que evita que la página se
            // se recargue
            e.preventDefault();
            //alert("Documento listo");
            $('.btn-delete').click(function(){
                // alert('boton llamado');
                // obtener el id de la fila
                var row = $(this).parents('tr');
                var id = row.data('id');
                var form = $('#form-delete');
                var url = form.attr('action').replace(':USER_ID', id);
                var data = form.serialize();

                $.post(url, data, function(result){
                    alert(result);
                });
                //alert(data);
            });
        });
    </script>
@endsection





