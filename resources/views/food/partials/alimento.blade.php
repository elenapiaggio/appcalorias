<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-xs-3 col-md-3 text-center">
                        <img src="{{asset("img/apple.png")}}" alt="food"
                             class="img-rounded img-responsive" />
                    </div>

                    <!-- Botón volver-->
                    <p><a class="btn btn-default pull-right" style="margin: 1em" href="{{route('food.list.index')}}" role="button">Volver </a></p>


                    <div class="col-xs-9 col-md-9 section-box">
                        <div class="col-md-15 center-block">
                            <br/>
                            <div class="panel panel-success">

                                <div class="panel-heading">
                                    <h4 class="text-center">Información Nutricional  >> " {{ $food->name }}"</h4>
                                </div>

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="icon-ok text-danger"></i>
                                        <p class="text-justify">
                                            <strong>Descripción: </strong>Eos modo dicta id, his dico facer ei! Simul deserunt dissentiet te eam, ea cum mazim elitr, nec ex probo soluta quaeque. An qui justo consulatu constituam, has iudicabit repudiandae id, usu ad eirmod impetus. Eu elit solet efficiantur pro, no mel legendos splendide efficiendi? Usu id labitur pertinax vituperatoribus, viris populo te pri. Ne his summo erroribus repudiare, vix te natum aliquid mentitum.
                                        </p>
                                    </li>

                                    <li class="list-group-item">Kcalorias: {{ $food->calories }}</li>
                                    <li class="list-group-item">Proteínas:  {{ $food->protein }}</li>
                                    <li class="list-group-item">Grasas: {{ $food->fats }}</li>
                                    <li class="list-group-item">Hidratos: {{ $food->hydrates }} <br /></li>
                                    <li class="list-group-item">Azúcares:{{ $food->sugars }}</li>
                                    <li class="list-group-item">Fibra:{{ $food->fiber }}</li>
                                    <li class="list-group-item">Sal:{{ $food->salt }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row rating-desc">
                            <div class="col-md-12">
                                <p>Grupo de alimentación: <strong>{{ $food->groups->name }}. </strong></p>
                                <p>Porción: <strong>100gr.</strong></p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
