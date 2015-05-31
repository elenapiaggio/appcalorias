@extends('app')

@section('content')

    <div class="container">
        <h1 class="page-header">Listado de Alimentos</h1>
        <p class="lead">Clica en un alimento para ver detalles.</p>
        <!-- Si la sesión tiene un mensaje
                    imprimimos el mensaje
                    -->

        @if (Session::has('message'))
            <p class="alert alert-success">{{ Session::get('message') }}</p>
        @endif
        <div class="row">
            <div id="users-management" class="col-md-8">
                <div class="panel-group" id="accordion">

                        <!-- INICIO DE ALIMENTO -->
                    @foreach($foods as $i => $food)

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapse-{{ ($i + 1) }}"><img src="{{asset("img/apple.png")}}" alt="food" class="img-rounded img-circle">
                                    {{ $food->name }} <small>(  {{ $food->groups->name }} )</small>
                                </a>
                                <div class="btn-group pull-right">
                                    <a href="#" class="btn btn-primary"><i class="fa fa-info"></i><span> Info</span></a>
                                    <a href="{{ route('food.list.edit', $food) }}" class="btn btn-warning"><i class="fa fa-pencil"></i><span> Editar</span></a>
                                    <a href="{{ route('food.list.destroy', $food) }}" class="btn btn-danger"><i class="fa fa-times"></i><span> Eliminar</span></a>
                                </div>
                            </h4>
                        </div>
                        <div id="collapse-{{ ($i + 1) }}" class="panel-collapse collapse">
                            <div class="panel-body">
                                <img src="{{asset("img/apple.png")}}" class="pull-left img-circle">
                                <p class="text-justify"><strong>Descripción: </strong> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                    {{--squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa--}}
                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                    single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                </p>
                                <br />

                                <p> <strong>Información Nutricional</strong></p>
                                <ul>
                                    <li><strong>Nombre:</strong> {{ $food->name }}</li>
                                    <li><strong>Grupo de alimentación: </strong>  {{ $food->groups->name }}</li>
                                    <li><strong>Calorias: </strong> {{ $food->calories}}</li>
                                    <li><strong>Proteínas: </strong> {{ $food->protein}} </li>
                                    <li><strong>Grasas: </strong> {{ $food->fats}} </li>
                                    <li><strong>Hidratos</strong> {{ $food->hydrates}} </li>
                                    <li><strong>Azúcares</strong> {{ $food->sugars  }} </li>
                                    <li><strong>Fibra</strong> {{ $food->fiber}} </li>
                                </ul>

                            </div>
                            <div class="panel-footer">
                            </div>

                        </div>
                    </div>
                    @endforeach
                    <!-- FIN DE ALIMENTO -->

                        <div class="panel-body">
                            <!-- la función render() se encarga de la paginación-->
                            {!! str_replace('/?', '?',  $foods->render()) !!}
                        </div>

                </div>
            </div>
        </div>
    </div>