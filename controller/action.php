<?php
include './configuracion/conexion.php';

$mensaje = "";

if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];

    $query = "INSERT INTO integrantes (id, nombre) VALUES ('$id','$nombre')";

    $insertar = mysqli_query($conexion, $query);
    
    if ($insertar) {
        $mensaje = "DATO INSERTADO";
    }else{
        $mensaje = "ERROR NO INSERTADO";
    }
}
