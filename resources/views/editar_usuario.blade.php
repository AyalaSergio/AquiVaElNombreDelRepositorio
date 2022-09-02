<form action="{{route('usuario.actualizar', $id)}}" method="POST">
    <h1>Editar datos de usuario</h1>
    @csrf
    @method("put")
    <label for="">Nombre de usuario</label>
    <input value="{{$id->username}}" type="text" name="username"> <br>
    <label for="">Contraseña:</label>
    <input value="{{$id->pass}}" type="text" name="pass"> <br>

    <input type="submit">
</form>