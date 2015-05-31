@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    <div class="panel-heading">Calcula tu consumo diario de calorias</div>

                    <div class="panel-body">

                        @include('food.partials.messages')

                        <div class="form-group">
                            {!! Form::label('height', 'Altura') !!}
                            {!! Form::text('height', null, ['class' => 'form-control', 'placeholder'=>'escribe tu altura' ]) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('weight', 'Peso') !!}
                            {!! Form::text('weight', null, ['class' => 'form-control', 'placeholder'=>'escribe tu peso' ]) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('birthdate', 'Fecha Nacimiento') !!}
                            {!! Form::date('birthdate', null, ['class' => 'form-control', 'placeholder'=>'escribe tu fecha de nacimiento' ]) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('type_activity', 'Tipo de actividad') !!}
                            {!! Form::select('sex', ['' => 'Selecciona Actividad',
                                            'sedentary' => 'Sedentaria',
                                            'light' => 'Baja',
                                            'moderate' => 'Moderada',
                                            'intense' => 'Intensa',
                                            'extremely_high' => 'Extremadamente alta'],
                                            null, ['class' => 'form-control']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('sex', 'Sexo') !!}
                            {!! Form::select('sex', ['' => 'Seleccionar sexo', 'female' => 'Female', 'male' => 'Male'], null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Calcular') !!}
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
