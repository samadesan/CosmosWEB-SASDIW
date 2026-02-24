<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require_once '../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_input = mysqli_real_escape_string($conexion, $_POST['user']);
    $pass_input = $_POST['pass'];

    $sql = "SELECT * FROM usuarios WHERE username = '$user_input'";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $usuario = mysqli_fetch_assoc($resultado);
        if (password_verify($pass_input, $usuario['password'])) {
            $_SESSION['usuario'] = $usuario['fullname'];
            header("Location: ../index.php");
            exit();
        } else {
            header("Location: ../login.php?error=credenciales");
            exit();
        }
    } else {
        header("Location: ../login.php?error=noexiste");
        exit();
    }
}