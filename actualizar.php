<?php
include "info.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $edad= $_POST["edad"];
    
    $sql = "UPDATE usuarios SET nombre='$nombre', telefono='$telefono', correo='$correo', edad='$edad' WHERE id=$id";
    
    if ($conexion->query($sql) === TRUE) {
        echo "Registro actualizado exitosamente.";
    } else {
        echo "Error al actualizar el registro: " . $conexion->error;
    }
}

$conexion->close();
?>
