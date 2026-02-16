<?php
session_start();
require_once '../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Corregido: mysqli_real_escape_string (sin el 'with')
    $fullname = mysqli_real_escape_string($conexion, $_POST['fullname']);
    $user = mysqli_real_escape_string($conexion, $_POST['user']);

    // Encriptamos la contraseña para seguridad
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (fullname, username, password) VALUES ('$fullname', '$user', '$pass')";

    if (mysqli_query($conexion, $sql)) {
        // Registro exitoso: Guardamos el nombre en la sesión
        $_SESSION['usuario'] = $fullname;
        header("Location: ../index.php");
        exit(); // Siempre pon exit() después de un header Location
    } else {
        echo "Error al registrar: " . mysqli_error($conexion);
    }
}
?>