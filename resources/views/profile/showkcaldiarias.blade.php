@extends('app')
@section('content')

    <div class="container">
        <h1 class="page-header">Calorias necesarias para User -> <small>" {{$user->first_name}} " </small></h1>
        <p class="lead">Clica para ver más detalles</p>
        <div class="row">
            <div id="faq" class="col-md-9">
                <div class="panel-group" id="accordion">

                    <!-- Kcalorias diarias -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapse-1">
                                    Consumo Kcalorias diarias
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    Utilizamos la fórmula de <strong>Harris-Benedict</strong>, para calcular la cantidad de <strong>kcal</strong> que necesitas por día
                                </p>

                                <div class="well">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Cálculos para:</th>
                                                <th>{{$user -> first_name}}</th>
                                                <th>{{ $user -> last_name }}</th>
                                                <th style="width: 36px;"></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Tu consumo ideal diario de calorias es de: <strong>{{ $kcal_diarias }} kcal.</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <p class="text-justify">
                                    * La Fórmula de <strong>Harris-Benedict</strong> es una ecuación empírica que calcula el metabolismo basal de una persona,
                                    todo en función de su peso corporal, estatura y edad, tomando en cuenta en conjunto con factores de actividad física,
                                    así calcular la recomendación de consumo diario de calorías para un individuo.
                                    Según esta ecuación si un individuo con un MB (metabolismo Basal) de 2.500 kcal consume solo 2 000, debería perder 1kg en 14 días.
                                </p>

                            </div>
                            <div class="panel-footer">
                                <div class="btn-group btn-group-xs"><span class="btn">¿Tienes alguna pregunta?</span><a class="btn btn-success" href="#"><i class="fa fa-thumbs-up"></i> Si</a> <a class="btn btn-danger" href="#"><i class="fa fa-thumbs-down"></i> No</a></div>
                            </div>
                        </div>
                    </div>


                    <!-- PESO IDEAL -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapse-2">
                                    Tu peso ideal
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    El peso va relacionado directamente con nuestro bienestar. Por eso la Organización Mundial de la Salud (OMS) y la Sociedad Española para el Estudio de la Obesidad (SEEDO) recomiendan controlarlo y mantenerse en equilibrio.  
                                </p>

                                <div class="well">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Cálculos para:</th>
                                            <th>{{$user -> first_name}}</th>
                                             <th>{{ $user -> last_name }}</th>
                                            <th style="width: 36px;"></th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>Tu consumo diario de calorias debe ser de: {{ $kcal_diarias }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <p class="text-justify">
                                    * La Fórmula de <strong>Harris-Benedict</strong> es una ecuación empírica que calcula el metabolismo basal de una persona,
                                    todo en función de su peso corporal, estatura y edad, tomando en cuenta en conjunto con factores de actividad física,
                                    así calcular la recomendación de consumo diario de calorías para un individuo.
                                    Según esta ecuación si un individuo con un MB (metabolismo Basal) de 2.500 kcal consume solo 2 000, debería perder 1kg en 14 días.
                                </p>

                            </div>
                            <div class="panel-footer">
                                <div class="btn-group btn-group-xs"><span class="btn">¿Tienes alguna pregunta?</span><a class="btn btn-success" href="#"><i class="fa fa-thumbs-up"></i> Si</a> <a class="btn btn-danger" href="#"><i class="fa fa-thumbs-down"></i> No</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- FIN PESO IDEAL -->

                    <!-- INICIO IMC -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapse-3">
                                    IMC -> Índice de masa corporal
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    Una buena forma de determinar si su peso es saludable para su estatura es calcular su índice de masa corporal <strong>(IMC)</strong>. Su proveedor de atención médica y usted pueden usar su IMC para calcular la cantidad de grasa corporal que usted tiene.
                                </p>

                                <div class="well">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Cálculos para:</th>
                                            <th>{{$user -> first_name}}</th>
                                            <th>{{ $user -> last_name }}</th>
                                            <th style="width: 36px;"></th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>Tu Índice de masa corporal (IMC) es: <strong> {{ $imc }} </strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <p class="text-justify">
                                    * El IMC no puede predecir el riesgo para su salud por sí mismo, pero la mayoría de los expertos indica que un índice superior a 30 (obesidad) no es saludable. Sin importar cuál sea su IMC, el ejercicio puede ayudarle a reducir el riesgo de cardiopatía y diabetes. Recuerde siempre hablar con su proveedor de atención médica antes de iniciar un programa de ejercicios.
                                </p>

                            </div>
                            <div class="panel-footer">
                                <div class="btn-group btn-group-xs"><span class="btn">¿Tienes alguna pregunta?</span><a class="btn btn-success" href="#"><i class="fa fa-thumbs-up"></i> Si</a> <a class="btn btn-danger" href="#"><i class="fa fa-thumbs-down"></i> No</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- FIN IMC-->

                    <!-- MAS INFO PESO IDEAL -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapse-4">
                                    Más informacion sobre el peso ideal
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-4" class="panel-collapse collapse">
                            <div class="panel-body">

                                <div class="well">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Peso ideal de la mujer</th>
                                                <th>Peso ideal del hombre</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>
                                                <p class="text-justify">
                                                    Las <strong>mujeres</strong> tienen un porcentaje de grasa mayor que los hombres, hecho que hace que su gasto energético sea inferior. Por ello se estima que el gasto energético de las mujeres es un 10% inferior al de los hombres.
                                                    Sin embargo, lo ideal es adaptar estas necesidades con la edad y la actividad física de cada una.<br/>
                                                    Para una mujer promedio, la cifra es de alrededor de 2.000 calorías al día.
                                                </p>
                                            </td>

                                            <td>
                                                <p class="text-justify">
                                                    Los <strong>hombres</strong> tienen un porcentaje mayor de masa muscular que las mujeres, hecho que hace que sus necesidades energéticas sean superiores.
                                                    Sin embargo, lo ideal es adaptar estas necesidades con la edad y la actividad física de cada uno.<br/>
                                                    Un hombre promedio necesita alrededor de 2.500 calorías al día para mantener su peso.
                                                </p>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>



                            </div>
                            <div class="panel-footer">
                                <div class="btn-group btn-group-xs"><span class="btn">¿Tienes alguna pregunta?</span><a class="btn btn-success" href="#"><i class="fa fa-thumbs-up"></i> Si</a> <a class="btn btn-danger" href="#"><i class="fa fa-thumbs-down"></i> No</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- FIN IMC-->
            </div>


        </div>



            <div style="padding-bottom: 14em" class="pull-right">
                <p class="lead pull-right ">Useful tips</p>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Tips</a>
                    <a href="#" class="list-group-item">Come 5 veces al día</a>
                    <a href="#" class="list-group-item">Camina media hora diaria</a>
                    <a href="#" class="list-group-item">No te saltes las comidas</a>

                </div>
            </div>
    </div>


@endsection

