<table class="table table-striped info">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Grupo</th>
        <th>Calorias</th>
        <th>Opciones</th>
    </tr>

    @foreach($foods as $food)


        <tr>
            <td>{{ $food->id }}</td>
            <td>{{ $food->name }}</td>

            <!-- Recuperación de datos de la tabla groups -->
            <td>  {{ $food->groups->name }} </td>

            <td>  {{ $food->calories}} </td>


            </td>
                <td>
                    <a href="{{ route('food.list.show', $food) }}">Mostrar</a>
                    <a href="{{ route('food.list.edit', $food) }}">Editar </a>
                    <a href="{{ route('food.list.destroy', $food) }}">Eliminar </a>
                </td>
        </tr>

    @endforeach
</table>