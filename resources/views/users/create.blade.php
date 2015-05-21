@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Nuevo usuario</div>

				<div class="panel-body">

				@include('admin.users.partials.messages')

				<p>
					{!! Form::open(['route'=> 'admin.users.store', 'method' => 'POST']) !!}
						@include('admin.users.partials.files')
					  	<div class="form-group">
							{!! Form::submit('Enviar') !!}
						</div>

					{!! Form::close() !!}
				</p>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
