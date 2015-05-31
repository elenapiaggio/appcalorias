@extends('app')

@section('content')

    <div class="container">
        <h1 class="page-header">Contador de calorías</h1>

        <p class="lead">Selecciona alimentos.</p>
        <div class="panel-group" id="accordion">

            <!-- La siguiente etiqueta estática la cambio por una dinámca -->
            <!-- <form class="navbar-form navbar-left pull-right" role="search"> -->
            {!! Form::open(['route' => 'food.list.index', 'method' => 'GET',
            'class' => 'navbar-form navbar-left pull-right', 'role' => 'search' ])!!}

            <div class="col-md-15">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="alimento a buscar">
            </div>
            <button type="submit" class="btn btn-default">Agregar</button>
                <p class="lead"></p>
                <div class="list-group">
                    <br/>
                    <a href="#" class="list-group-item active">Total Kcal</a>
                    <a href="#" class="list-group-item">Cupcake: 450 kcal </a>
                    <a href="#" class="list-group-item">Pasta integral: 220 kcal</a>
                </div>
            </div>


            {!! Form::close() !!}
        </div>

        <!-- Si la sesión tiene un mensaje imprimimos el mensaje -->
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

                                </h4>
                            </div>
                            <div id="collapse-{{ ($i + 1) }}" class="panel-collapse collapse">
                                <div class="panel-body">

                                    <br />

                                    <p> <strong>Información Nutricional</strong></p>
                                    <ul>
                                        <li><strong>Nombre:</strong> {{ $food->name }}</li>
                                        <li><strong>Grupo de alimentación: </strong>  {{ $food->groups->name }}</li>
                                        <li><strong>Calorias: </strong> {{ $food->calories}}</li>
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

