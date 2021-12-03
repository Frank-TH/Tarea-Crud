<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "crud";

$conexion = new mysqli($server,$user,$password,$database);

if($conexion -> connect_errno){
    die("La conexion ha fallado".$conexion->connect_errno);
}

