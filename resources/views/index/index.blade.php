@extends('app')

@section('content')

    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay"></div>

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#bs-carousel" data-slide-to="1"></li>
            <li data-target="#bs-carousel" data-slide-to="2"></li>
        </ol>


        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides active">
                <div class="slide-1"></div>
                <div class="hero">
                    <hgroup>

                    </hgroup>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-2"></div>
                <div class="hero">
                    <hgroup>
                        <h1>  Realiza 5 comidas</h1>
                        <h2>poco abundantes y no piques entre horas </h2>
                    </hgroup>
                    <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
                </div>
            </div>
            <div class="item slides">
                <div class="slide-3"></div>
                <div class="hero">
                    <hgroup>
                        <h1>Desayuno</h1>
                        <h3>Es la comida más imortante del día  </h3>
                        <h3>Dedícale al menos unos 15 o 20 minutos </h3>

                    </hgroup>
                </div>
            </div>
        </div>
    </div>
@endsection

