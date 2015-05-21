@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar usuario: {{ $user->first_name }}</div>

				<div class="panel-body">
				@include('admin.users.partials.messages')
				<p>
					{!! Form::model($user, ['route'=> ['admin.users.update', $user], 'method' => 'PUT']) !!}
						@include('admin.users.partials.files')
					  	<div class="form-group">
							{!! Form::submit('Actualizar usuario') !!}
						</div>

					{!! Form::close() !!}
				</p>
				</div>
			</div>
			@include('admin.users.partials.delete')
		</div>
	</div>
</div>
@endsection
