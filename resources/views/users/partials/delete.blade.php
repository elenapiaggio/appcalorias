<!-- La primera posición dentro de un array siempre es el nombre de la ruta 
y el resto son los parámetros -->

{!! Form::open(['route' => ['admin.users.destroy', $user], 'method' => 'DELETE' ]) !!}

<!-- Si queremos utilizar javascript para lanzar un mensaje de alerta de que 
el usuario será borrado utilizamos:-->
<button type="submit" onclick="return confirm('Seguro que desea eliminar?')" class="btn btn-danger"> Eliminar usuario </button>
{!! Form::close() !!}