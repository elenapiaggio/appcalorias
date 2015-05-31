@extends('app')

@section('content')

    <div class="container">
        <h1 class="page-header">Lista</h1>
        <p class="lead">Click an user name to see more details.</p>
        <div class="row">
            <div id="users-management" class="col-md-8">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapse-1"><img src="http://lorempixel.com/128/128/people/?1" class="img-circle">
                                    John Doe <small>(johndoe)</small>
                                </a>
                                <div class="btn-group pull-right"><a href="#" class="btn btn-primary"><i class="fa fa-info"></i><span> Info</span></a><a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i><span> Edit</span></a><a href="#" class="btn btn-danger"><i class="fa fa-times"></i><span> Remove</span></a></div>
                            </h4>
                        </div>
                        <div id="collapse-1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <img src="http://lorempixel.com/128/128/people/?1" class="pull-left img-circle">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                    single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                </p>
                                <p>beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                    lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                                    probably haven't heard of them accusamus labore sustainable VHS.
                                </p>
                            </div>
                            <div class="panel-footer">
                                <div class="btn-group btn-group-xs"><span class="btn">Actions: </span><a class="btn btn-success" href="#"><i class="fa fa-thumbs-up"></i> Add reputation</a> <a class="btn btn-danger" href="#"><i class="fa fa-thumbs-down"></i> Decrease reputation</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapse-2"><img src="http://lorempixel.com/128/128/people/?2" class="img-circle">
                                    Janeth Doe <small>(janedoe)</small>
                                </a>
                                <div class="btn-group pull-right"><a href="#" class="btn btn-primary"><i class="fa fa-info"></i><span> Info</span></a><a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i><span> Edit</span></a><a href="#" class="btn btn-danger"><i class="fa fa-times"></i><span> Remove</span></a></div>
                            </h4>
                        </div>
                        <div id="collapse-2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <img src="http://lorempixel.com/128/128/people/?2" class="pull-left img-circle">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                    single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                </p>
                                <p>beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                    lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                                    probably haven't heard of them accusamus labore sustainable VHS.
                                </p>
                            </div>
                            <div class="panel-footer">
                                <div class="btn-group btn-group-xs"><span class="btn">Actions: </span><a class="btn btn-success" href="#"><i class="fa fa-thumbs-up"></i> Add reputation</a> <a class="btn btn-danger" href="#"><i class="fa fa-thumbs-down"></i> Decrease reputation</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapse-3"><img src="http://lorempixel.com/128/128/people/?3" class="img-circle">
                                    Michael Jackson <small>(mijacksn)</small>
                                </a>
                                <div class="btn-group pull-right"><a href="#" class="btn btn-primary"><i class="fa fa-info"></i><span> Info</span></a><a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i><span> Edit</span></a><a href="#" class="btn btn-danger"><i class="fa fa-times"></i><span> Remove</span></a></div>
                            </h4>
                        </div>
                        <div id="collapse-3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <img src="http://lorempixel.com/128/128/people/?3" class="pull-left img-circle">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                    single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                </p>
                                <p>beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                    lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                                    probably haven't heard of them accusamus labore sustainable VHS.
                                </p>
                            </div>
                            <div class="panel-footer">
                                <div class="btn-group btn-group-xs"><span class="btn">Actions: </span><a class="btn btn-success" href="#"><i class="fa fa-thumbs-up"></i> Add reputation</a> <a class="btn btn-danger" href="#"><i class="fa fa-thumbs-down"></i> Decrease reputation</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapse-4"><img src="http://lorempixel.com/128/128/people/?4" class="img-circle">
                                    Alexis Foobar <small>(afoobar)</small>
                                </a>
                                <div class="btn-group pull-right"><a href="#" class="btn btn-primary"><i class="fa fa-info"></i><span> Info</span></a><a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i><span> Edit</span></a><a href="#" class="btn btn-danger"><i class="fa fa-times"></i><span> Remove</span></a></div>
                            </h4>
                        </div>
                        <div id="collapse-4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <img src="http://lorempixel.com/128/128/people/?4" class="pull-left img-circle">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                    single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                </p>
                                <p>beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                    lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                                    probably haven't heard of them accusamus labore sustainable VHS.
                                </p>
                            </div>
                            <div class="panel-footer">
                                <div class="btn-group btn-group-xs"><span class="btn">Actions: </span><a class="btn btn-success" href="#"><i class="fa fa-thumbs-up"></i> Add reputation</a> <a class="btn btn-danger" href="#"><i class="fa fa-thumbs-down"></i> Decrease reputation</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapse-5"><img src="http://lorempixel.com/128/128/people/?5" class="img-circle">
                                    John Doe <small>(johndoe)</small>
                                </a>
                                <div class="btn-group pull-right"><a href="#" class="btn btn-primary"><i class="fa fa-info"></i><span> Info</span></a><a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i><span> Edit</span></a><a href="#" class="btn btn-danger"><i class="fa fa-times"></i><span> Remove</span></a></div>
                            </h4>
                        </div>
                        <div id="collapse-5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <img src="http://lorempixel.com/128/128/people/?5" class="pull-left img-circle">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                    single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                </p>
                                <p>beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                    lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                                    probably haven't heard of them accusamus labore sustainable VHS.
                                </p>
                            </div>
                            <div class="panel-footer">
                                <div class="btn-group btn-group-xs"><span class="btn">Actions: </span><a class="btn btn-success" href="#"><i class="fa fa-thumbs-up"></i> Add reputation</a> <a class="btn btn-danger" href="#"><i class="fa fa-thumbs-down"></i> Decrease reputation</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>