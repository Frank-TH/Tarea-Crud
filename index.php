<?php
include 'configuracion/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="estilos/tabla.css">
</head>

<body>

    <div>
        <h1>CRUD</h1>
        <p>Integrante: </p>
        <form action="" method="GET">
            <input type="text" name="user" id="">
            <input type="submit" name="enviar" value="Buscar">
            <input type="submit" name="add" value="Agregar">
            <?php

            if (isset($_GET['add'])) {
                header('Location: registrar.php');
            }


            if (isset($_GET['enviar'])) {

                if (empty($_GET['user'])) {
                    echo '<p>Campo obligatorio</p>';
                } else {
                    echo '<br>';
                }
            }
            ?>
        </form>
    </div>

    <br>
    <hr>

    <table>
        <thead>
            <tr>
                <th>Codigo Estudiante</th>
                <th>Nombre</th>
                <th>Materia</th>
                <th>Docente</th>
            </tr>
        </thead>
        <tbody>
            <?php

            if (isset($_GET['enviar'])) {
                $busquedad = $_GET['user'];
                $consulta = $conexion->query("SELECT * FROM integrantes WHERE nombre = '$busquedad' OR id = '$busquedad'");

                while ($row = $consulta->fetch_array()) {
                    echo '<tr><td>' . $row['id'] . '</td>
                  <td>' . $row['nombre'] . '</td>
                  <td>TALLER PROGRAMACION WEB</td>
                  <td>HECTOR ODIN DELGADO ENRIQUEZ</td>
                  </tr>';
                }
            }

            ?>
        </tbody>
    </table>

</body>

</html>