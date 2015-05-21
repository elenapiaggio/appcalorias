						<div class="form-group">
					  		{!! Form::label('email', 'Correo Electrónico') !!}
					  		{!! Form::text('email', null, ['class' => 'form-control', 'placeholder'=>'escribe tu mail aqui' ]) !!}
						</div>

						<div class="form-group">
							{!! Form::label('password', 'Contraseña') !!}
					  		{!! Form::password('password', ['class' => 'form-control']) !!}
						</div>

						<div class="form-group">
					  		{!! Form::label('first_name', 'Nombre') !!}
					  		{!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder'=>'escribe tu nombre ' ]) !!}
						</div>

						<div class="form-group">
					  		{!! Form::label('last_name', 'Apellido') !!}
					  		{!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder'=>'escribe tu apellido' ]) !!}
						</div>

						<div class="form-group">
							{!! Form::label('type', 'Tipo de usuario') !!}
							{!! Form::select('type', ['' => 'Seleccione el tipo de usuario', 'user' => 'Usuario', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
						</div>

						