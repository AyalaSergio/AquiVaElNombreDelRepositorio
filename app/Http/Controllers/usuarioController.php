<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarioModel;

class usuarioController extends Controller
{
    function insertar(Request $req)
    {
        $usuario = new UsuarioModel();

        $usuario->username = $req->username;
        $usuario->pass = $req->pass;
        $usuario->estatus = 1;

        $usuario->save();
        return redirect()->route("usuario.mostrar");
    }

    function mostrar()
    {
        $datos = UsuarioModel::all();
        return view("lista_usuarios", compact("datos"));
    }
    function editar(UsuarioModel $id)
    {
        return view("editar_usuario", compact("id"));
    }
    function actualizar(UsuarioModel $id, Request $req)
    {
        $id->username = $req->username;
        $id->pass = $req->pass;
        $id->estatus = 1;

        $id->save();
        return redirect()->route("usuario.mostrar");
    }
    function eliminar(UsuarioModel $id)
    {
        $id->delete();
        return redirect()->route("usuario.mostrar");
    }

    function baja(UsuarioModel $id)
    {
        $id->estatus = 0;

        $id->save();
        return redirect()->route("usuario.mostrar");
    }
}
