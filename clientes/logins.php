<?php
# Nota: no estamos haciendo validaciones
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];

# Luego de haber obtenido los valores, ya podemos comprobar
# Incluimos a las funciones, mira funciones.php
include_once "funciones.php";
$logueadoConExito = login($correo, $contraseña);
if ($logueadoConExito) {
    # Redirigir al index
    header("Location: inicio.php");
    # Y salir
    exit;
} else {
    # Si no, entonces indicarlo
    header("Location:login.php?mensaje=Usuario o contraseña incorrecta");
}