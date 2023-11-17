<?php
include "info.php";

$sql = "SELECT * FROM usuarios";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["id"] . " - Nombre: " . $fila["nombre"] . " - Telefono: " . $fila["telefono"] . " - Correo: " . $fila["correo"] . " - Edad: " . $fila["edad"] . "<br>";
    }
} else {
    echo "No se encontraron registros.";
}

$conexion->close();
?>