<?php
# Nota: no estamos haciendo validaciones
$nombre=$_POST["nom"];
$direccion=$_POST["direccion"];
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];
$contraseña_confirmar = $_POST["contraseña_confirmar"];
$fecha_nacimiento=$_POST["fecha_nacimiento"];
$sexo=$_POST["sexo"];
if ($contraseña !== $contraseña_confirmar) {
 #Si no coinciden ambas contraseñas, lo indicamos y salimos
    header("Location:registrar.php?mensaje=Las contraseñas no coinciden,intente de nuevo");
    //echo "Las contraseñas no coinciden, intente de nuevo";
    exit;   
}

# Incluimos las funciones
include_once "funciones.php";

# Primero debemos saber si existe o no
$existe = usuarioExiste($correo);
if ($existe) {
    header("Location:registrar.php?mensaje=ya existe alguien registrado con ese correo");
    exit; # Salir para no ejecutar el siguiente código
}

# Si no existe, se ejecuta esta parte
# Ahora intentamos registrarlo
$registradoCorrectamente = registrarUsuario($nombre,$direccion,$correo, $contraseña,$fecha_nacimiento,$sexo);
if ($registradoCorrectamente) {
    include "login.php";
} else {
    header("Location:registrar.php?mensaje=Error al registrarte. Intenta más tarde");
}