@extends('app')

@section('content')

    <div style="padding-bottom: 23em" class="container">

        <h1 class="page-header">Cálculos para User => <small>{{ $user->first_name }}</small> </h1>
        <p class="lead">Rellena esta ficha para realizar los cálculos</p>

        <div class="panel-body">
            <!-- Si la sesión tiene un mensaje imprimimos el mensaje -->
            @if (Session::has('message'))
                <p class="alert alert-success">{{ Session::get('message') }}</p>
            @endif
            {!! Form::model($user, ['route'=> ['admin.users.update', $user], 'method' => 'PUT']) !!}

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
                {!! Form::date('birthdate', null, ['class' => 'form-control', 'placeholder'=>'YYYY/MM/DD' ]) !!}
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