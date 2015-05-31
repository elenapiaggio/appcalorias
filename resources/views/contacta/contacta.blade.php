@extends('app')

@section('content')


<div  class="jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-º12">
                <h1 >
                    Quieres colaborar? <small>No dudes en contactarnos.</small></h1>
            </div>
        </div>
    </div>
</div>
<div style="margin-bottom: 5em" class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Nombre</label>
                                <input type="text" class="form-control" id="name" placeholder="escriba su nombre" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Dirección</label>
                                <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                    <input type="email" class="form-control" id="email" placeholder="escriba su email" required="required" /></div>
                            </div>
                            <div class="form-group">
                                <label for="subject">
                                    Asunto</label>
                                <select id="subject" name="subject" class="form-control" required="required">
                                    <option value="na" selected="">Seleccione uno:</option>
                                    <option value="service">General</option>
                                    <option value="suggestions">Sugerencias</option>
                                    <option value="product">Colaborar</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Mensaje</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                      placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.1490060729334!2d2.1671473000000026!3d41.3925703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2eda77c7903%3A0xfd9ff054c646ae00!2sCarrer+de+Pau+Claris%2C+121%2C+08009+Barcelona!5e0!3m2!1ses!2ses!4v1432839794998" width="600" height="450" frameborder="0" style="border:0"></iframe>
            <form>
                <legend><span class="glyphicon glyphicon-globe"></span> Dónde estamos?</legend>
                <address>
                    <strong>AppCalorias, Inc.</strong><br>
                    Carrer de Pau Claris, 121, 08009 Barcelona<br>
                    Barcelona - España<br>
                    <abbr title="Phone">
                        Telf:</abbr>
                    934 87 03 01
                </address>

            </form>
        </div>
    </div>
</div>
