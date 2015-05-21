						<div class="form-group">
					  		{!! Form::label('name', 'Nombre') !!}
					  		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'escribe el nombre del alimento' ]) !!}
						</div>

						<div class="form-group">
							{!! Form::label('type', 'Grupo de alimento') !!}
							{!! Form::select('group_id',
                                    ['' => 'Seleccione el grupo del alimento',
                                        11 => 'Fruta',
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

                        <div class="form-group">
                            {!! Form::label('property_id', 'Id Property') !!}
                            {!! Form::text('property_id', null, ['class' => 'form-control', 'placeholder'=>'escribe el id de sus propiedades' ]) !!}
                        </div>

						