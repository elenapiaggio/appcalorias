						<div class="form-group">


                            <!-- Campo nombre-->
					  		{!! Form::label('name', 'Nombre', null, ['class' => 'col-sm-3 control-label']) !!}
					  		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'escribe el nombre del alimento' ]) !!}
                        </div>

                        <!-- Campo Grupo de alimento-->
                        <div class="form-group">
							{!! Form::label('type', 'Grupo de alimento') !!}
							{!! Form::select('group_id',
                                    ['' => 'Seleccione el grupo del alimento',
                                        1 => 'Fruta',
                                        2 => 'Aves',
                                        3 => 'Carne',
                                        4 => 'Vegetales',
                                        5 => 'Preparada',
                                        6 => 'Pescado',
                                        7 => 'Grasa',
                                        8 => 'Cereales',
                                        9 => 'Propagación'
                                     ], null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Campo calorias-->
                        <div class="form-group">
                            {!! Form::label('calories', 'Calories') !!}
                            {!! Form::text('calories', null, ['class' => 'form-control', 'placeholder'=>'calorias' ]) !!}
                        </div>

                        <!-- Campo nombre-->
                        <div class="form-group">
                            {!! Form::label('protein', 'Proteínas') !!}
                            {!! Form::text('protein', null, ['class' => 'form-control', 'placeholder'=>'proteinas' ]) !!}
                        </div>

                        <!-- Campo nombre-->
                        <div class="form-group">
                            {!! Form::label('fats', 'Grasas') !!}
                            {!! Form::text('fats', null, ['class' => 'form-control', 'placeholder'=>'grasas' ]) !!}
                        </div>

                        <!-- Campo nombre-->
                        <div class="form-group">
                            {!! Form::label('hydrates', 'Hidratos') !!}
                            {!! Form::text('hydrates', null, ['class' => 'form-control', 'placeholder'=>'hidratos' ]) !!}
                        </div>

                        <!-- Campo nombre-->
                        <div class="form-group">
                            {!! Form::label('sugars', 'Azúcares') !!}
                            {!! Form::text('sugars', null, ['class' => 'form-control', 'placeholder'=>'azúcares' ]) !!}
                        </div>

                        <!-- Campo nombre-->
                        <div class="form-group">
                            {!! Form::label('fiber', 'fibra') !!}
                            {!! Form::text('fiber', null, ['class' => 'form-control', 'placeholder'=>'fibra' ]) !!}
                        </div>

                        <!-- Campo nombre-->
                        <div class="form-group">
                            {!! Form::label('salt', 'Sal') !!}
                            {!! Form::text('salt', null, ['class' => 'form-control', 'placeholder'=>'sal' ]) !!}
						</div>




						