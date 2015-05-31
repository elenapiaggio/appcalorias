<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <ul>
            <li style="padding: 0; padding-bottom: 0.4em; margin: 0"><a class="navbar-brand" href="#"><img src="{{asset("img/head.png")}}" alt="logoAppCaloriasResponsive"></a></li>
        </ul>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul  class="nav navbar-nav navbar-right">


                @if (Auth::guest())
                    <!-- Síguenos en:
                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://www.tuweb.com/" target="_blank"><img src="https://lh3.googleusercontent.com/-H8xMuAxM-bE/UefWwJr2vwI/AAAAAAAAEdY/N5I41q19KMk/s32-no/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com/home?status=http://www.tuweb.com/" target="_blank"> <img src="https://lh5.googleusercontent.com/-xZVxH6CsUaQ/UefWwgi8o3I/AAAAAAAAEdk/reo5XS6z8-8/s32-no/twitter.png"> </a></li>
                    <li><a href="https://plus.google.com/share?url=http://www.tuweb.com/" target="_blank"><img src="https://lh5.googleusercontent.com/-5Q7Sj0SXhOA/UefWwcrnZ-I/AAAAAAAAEdg/auK3wqGCbZE/s32-no/googleplus.png"></a></li>
                    -->
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                    <li><a href="">|</a></li>
                    <li><a href="{{ url('/auth/register') }}">Regístrate</a></li>
                @else

                        <!-- Menú Home-->
                    <li><a href="{{ url('/bienvenido') }}">Home</a></li>

                    <!-- Menú Calculadora-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Calculadora <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/profile/form') }}">Calcular kcal diarias</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/calcularkcal') }}">Contar calorias</a></li>
                        </ul>
                    </li>

                    <!--  Menu Alimentos -->
                    <li class="dropdown">
                        <a href="{{ url('/food/list') }}" class="dropdown-toggle" data-toggle="dropdown">{{Lang::get('foods.foods')}} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/food/list') }}">Listar</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/food/list') }}">Listar Nou</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/restaurantes') }}">Restaurantes</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/trucos') }}">Trucos y Consejos</a></li>
                        </ul>
                    </li>

                    <!--  Menu Gastronomía -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gastronomía <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/recetas') }}">Recetas</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/noticias') }}">Noticias</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/restaurantes') }}">Restaurantes</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/trucos') }}">Trucos y Consejos</a></li>
                        </ul>
                    </li>

                    <!--  Menu Acerca -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acerca <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/contacta') }}">Quienes somos</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/quienessomos') }}">Contacta</a></li>
                        </ul>
                    </li>

                <!-- Idiomas-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">idioma <b class="caret"></b></a>
                        <ul class="dropdown-menu">

                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                        {{{ $properties['native'] }}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>


                <!-- Login -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hola, {{ Auth::user()->first_name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>