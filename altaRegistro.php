<?php
    require 'conexion.php';

    $nombre = $_POST['nombre'] ?? null;
    $apellido = $_POST['apellido'] ?? null;
    $email = $_POST['email'] ?? null;
    $telefono = $_POST['telefono'] ?? null;
    $contrasena = $_POST['contrasena'] ?? null;
    $validarContrasena = $_POST['validarContrasena'] ?? null;
    $direccion = $_POST['direccion'] ?? null;
    $fecha = $_POST['fecha'] ?? null;

    if ($contrasena === $validarContrasena) {
        $sql = "INSERT INTO clientes (nombre, apellidos, email, telefono, direccion, fecha_registro, contrasena) VALUES ('$nombre', '$apellido', '$email', '$telefono', '$direccion', '$fecha', '$contrasena');";

        $resultado = mysqli_query($db,$sql);
        /*echo "<pre>";
        var_dump($resultado);
        echo "</pre>";*/

        header("location:index.php");
    }else{
        echo "Las contraseñas no coinciden";
    }




?>