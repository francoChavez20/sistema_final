<?php

class vistaModelo
{
    protected static function obtener_vista($vista)
    {
        $palabras_permitidas = [
            'usuario',
            'productos',
            'carrito',
            'promociones',
            'producto',
            'niñosyniñas',
            'lomasvendido',
            'detalles_producto',
            'damas',
            'conocenos',
            'calificaciones',
            'caballeros',
            'favoritosUsuarios',
            'historial',
            'inicio',
            'perfilUsuario'

        ];
        if (in_array($vista, $palabras_permitidas)) {
            if (is_file("./views/" . $vista . ".php")) {
                $contenido = "./views/" . $vista . ".php";
            } else {
                $contenido = "404";
            }
        } elseif ($vista == "login"  || $vista == "index") {
            $contenido = "login";
        } else {
            $contenido = "404";
        }

        return $contenido;
    }
}