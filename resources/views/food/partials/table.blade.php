<table class="table table-striped">
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

            <!-- Recuperación de datos de la tabla properties -->
            @foreach($food->properties as $prop)
                <td> {{ $prop -> calories }}</td>
                <td> {{ $prop -> salt }}</td>
                @endforeach
                <td>
                    <a href="">Mostrar</a>
                    <a href="">Editar </a>
                    <a href="">Eliminar </a>
                </td>
        </tr>
    @endforeach
</table>