@extends('app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Contador de calorias</div>

                <div class="panel-body">

                    @include('food.partials.messages')



                    <div class="form-group">
                        {!! Form::label('sex', 'Alimentos') !!}
                        {!! Form::select('sex', ['' => 'Seleccionar alimento',

                        'female' => 'Female', 'male' => 'Male'], null, ['class' => 'form-control']) !!}

                        
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Añadir') !!}
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
