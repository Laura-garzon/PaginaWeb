<?php

include 'conexion.php';

$registro = json_decode(file_get_contents('php://input'), true); // decodifica los datos JSON

$nombre = $registro['nombre'];
$correo = $registro['correo'];
$password = $registro['password'];
$tipoUsuario=$registro['tipoUsuario'];

$query = "INSERT INTO docente(nombre, correo, password,tipoUsuario) VALUES('$nombre', '$correo', '$password','$tipoUsuario')";

$ejecutar = mysqli_query($conexion, $query);

?>