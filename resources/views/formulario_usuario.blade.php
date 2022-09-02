<form action="{{route('usuario.insertar')}}" method="POST">
    <h1>Registrar Usuario</h1>
    @csrf
    <label for="">Nombre de usuario</label>
    <input type="text" name="username"> <br>
    <label for="">Contraseña:</label>
    <input type="text" name="pass"> <br>

    <input type="submit">
</form>