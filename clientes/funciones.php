<?php

include_once "conexion.php";

function usuarioExiste($correo){
    $basededatos=conexion();
    $sentencia=$basededatos->prepare("SELECT correo FROM  usuario WHERE correo = ? LIMIT 1;");
    $sentencia->execute([$correo]);
    return $sentencia->rowCount() > 0;
}



function obtenerUsuarioPorCorreo($correo)
{
    $basededatos = conexion();
    $sentencia = $basededatos->prepare("SELECT correo, palabra_secreta FROM usuario WHERE correo = ? LIMIT 1;");
    $sentencia->execute([$correo]);
    return $sentencia->fetchObject();
}

function registrarUsuario($nombre,$direccion,$correo, $contraseña,$fecha_nacimiento,$sexo)
{
    # NUNCA guardes contraseñas en texto plano
    $contraseña = hashearPalabraSecreta($contraseña);
    $basededatos = conexion();
    $sentencia = $basededatos->prepare("INSERT INTO usuario(nombre,direccion,correo, palabra_secreta,fecha_nacimiento,sexo) values(?,?,?,?,?,?)");
    return $sentencia->execute([$nombre,$direccion,$correo,$contraseña,$fecha_nacimiento,$sexo]);
}

function login($correo, $contraseña)
{
    # Primero obtener usuario...
    $posibleUsuarioRegistrado = obtenerUsuarioPorCorreo($correo);
    if ($posibleUsuarioRegistrado === false) {
        # Si no existe, salimos y regresamos false
        return false;
    }
    # Esto se ejecuta en caso de que exista
    # Comprobar contraseñas
    # Sacar el hash que tenemos en la BD
    $palabraSecretaDeBaseDeDatos = $posibleUsuarioRegistrado->palabra_secreta;
    $coinciden = coincidenPalabrasSecretas($contraseña, $palabraSecretaDeBaseDeDatos);
    # Si no coinciden, salimos de una vez
    if (!$coinciden) {
        return false;
    }

    # En caso de que sí hayan coincidido iniciamos sesión pasando el objeto
    iniciarSesion($posibleUsuarioRegistrado);
    # Y regresamos true ;)
    return true;
}

function iniciarSesion($usuario)
{
    // Se encarga de poner los datos dentro de la sesión
    session_start();
    # Y poner los datos, no recomiendo poner la contraseña
    $_SESSION["correo"] = $usuario->correo;
}

# Para las contraseñas mira lo siguiente
# https://parzibyte.me/blog/2017/11/13/cifrando-comprobando-contrasenas-en-php/

function coincidenPalabrasSecretas($contraseña, $palabraSecretaDeBaseDeDatos)
{
    return password_verify($contraseña, $palabraSecretaDeBaseDeDatos);
}

function hashearPalabraSecreta($contraseña)
{
    return password_hash($contraseña, PASSWORD_BCRYPT);
}


#funcion para productos

