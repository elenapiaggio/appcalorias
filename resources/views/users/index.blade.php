@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Usuarios</div>

			<!-- Si la sesión tiene un mensaje
			imprimimos el mensaje
			-->	

			@if (Session::has('message'))
				<p class="alert alert-success">{{ Session::get('message') }}</p>
			@endif

				<div class="panel-body">
				<p>
					<a class="btn btn-info" href="{{route('admin.users.create')}}" role="button">
					Crear Usuario
					</a>
				</p>
					Listado de usuarios
					<p>Hay {{ $users->lastPage()}} páginas</p>
					<p>Hay {{ $users->total()}} registros</p>
					@include('admin.users.partials.table')
					<!-- la función render() se encarga de la paginación-->
					<!-- {!! $users->render()!!} -->
					{!! str_replace('/?', '?',  $users->render()) !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
