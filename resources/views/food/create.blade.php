<!-- Vista para crear un nuevo alimento -->

@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo alimento</div>
                    <div class="panel-body">

                        @include('food.partials.messages')
                        <p>
                            {!! Form::open(['route'=> 'food.list.store', 'method' => 'POST']) !!}
                            @include('food.partials.files')
                        <div class="form-group">
                            {!! Form::submit('Alta del Alimento') !!}
                        </div>
                        {!! Form::close() !!}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
