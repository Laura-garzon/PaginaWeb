<?php
session_start();
include("conexion.php");

if (isset($_POST['correo']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $correo = validate($_POST['correo']);
    $password = validate($_POST['password']);

    if (empty($correo)) {
        header("location: index.html?error=completar correo");
        exit();
    } elseif (empty($password)) {
        header("location: index.html?error=completar password");
        exit();
    } else {
        $sql = "SELECT * FROM docente WHERE correo ='$correo' AND password='$password'";
        $result = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['correo'] == $correo && $row['password'] == $password) {
                // Set session variables if needed
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_email'] = $row['correo'];
             if ($row['tipoUsuario']=='docente'){
                header("location: iniciodocente.php");
             }elseif($row['tipoUsuario']=='centro'){
                header("location: subir.php");
             }else{
                header("location: default.html");
             }
                exit();
            } else {
                header("location: index.html?error=correo o password incorrecto");
                exit();
            }
        } else {
            header("location: index.html?error=correo o password incorrecto");
            exit();
        }
    }
} else {
    header("location: index.html");
    exit();
}