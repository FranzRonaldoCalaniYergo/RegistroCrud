<?php
include "info.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $edad = $_POST["edad"];
    
    $sql = "INSERT INTO usuarios (nombre, telefono, correo, edad) VALUES ('$nombre', '$telefono', '$correo', '$edad')";
    
    if ($conexion->query($sql) === TRUE) {
        echo "Registro creado exitosamente.";
    } else {
        echo "Error al crear el registro: " . $conexion->error;
    }
}

$conexion->close();
?>