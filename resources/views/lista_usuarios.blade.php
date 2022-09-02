
<h1>Lista de usuarios</h1>
<table>
    <tr>
        <th>Nombre de usuario</th>
        <th>Contraseña</th>
        <th>Estatus</th>
        <th>Fecha de registro</th>
        <th>Opciones</th>
    </tr>
    @foreach ($datos as $fila)
        <tr>
            <td>{{$fila["username"]}}</td>
            <td>{{$fila->pass}}</td>
            <td>{{$fila["estatus"]}}</td>
            <td>{{$fila["created_at"]}}</td>
            <td>
                <a href="{{route('usuario.editar', $fila->id)}}">Editar</a>
                <form action="{{route('usuario.eliminar', $fila->id)}}" method="post">
                    @csrf
                    @method("delete")
                    <input type="submit" value="Eliminar">
                </form>
                <a href="{{route('usuario.baja', $fila->id)}}">Dar de baja</a>
            </td>
        </tr>
    @endforeach
</table>