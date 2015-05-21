				
				@if($errors->any())
				<!-- Utilizamos una clase de bootstrap para los errores: -->	
				<div class="alert alert-danger" role="alert">	
				<!-- si tenemos algun error  imprimimos un mensaje
				y hacemos un ciclo con los errores -->

					<p> Por favor corrige los siguientes errores: </p>
					<ul>
					@foreach($errors->all() as $error)
						<li> {{ $error }} </li>
					@endforeach
					</ul>
				</div>
				@endif	

				