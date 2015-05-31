@extends('app')
@section('content')

    <div style="padding-bottom: 23em" class="container">
        <h1 class="page-header"><small>Editanto alimento:</small> <strong>{{ $food->name }} </strong></h1>
        <p class="lead">Clica para editar.</p>
        <div class="row">
            <div id="users-management" class="col-md-8">
                <div class="panel-group" id="accordion">

                    <!-- INICIO DE ALIMENTO A EDITAR -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapse-1"><img src="{{asset("img/apple.png")}}" alt="food" class="img-rounded img-circle">
                                        {{ $food->name }} <small>(  {{ $food->groups->name }} )</small>
                                    </a>
                                    <div class="btn-group pull-right">
                                        <a href="#" class="btn btn-success"><i class="fa fa-info"></i><span> Volver </span></a>
                                    </div>
                                </h4>
                            </div>
                            <div id="collapse-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="panel-body">
                                        @include('food.partials.messages')
                                        <p>
                                            {!! Form::model($food, ['route'=> ['food.list.update', $food], 'method' => 'PUT']) !!}
                                            @include('food.partials.files')
                                        <div class="form-group">
                                            {!! Form::submit('Actualizar') !!}
                                        </div>

                                        {!! Form::close() !!}
                                        </p>
                                    </div>

                                </div>
                                <div class="panel-footer">
                                </div>
                            </div>
                        </div>
                        <!-- FIN DE ALIMENTO -->
                </div>
            </div>
        </div>
    </div>