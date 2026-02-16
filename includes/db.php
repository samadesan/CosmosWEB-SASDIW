<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'sistema-solar';
$port = '3306'; // Cambiar al puerto a 3307 si usas Windows

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}