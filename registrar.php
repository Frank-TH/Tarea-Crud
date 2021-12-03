<?php
include 'controller/action.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/registro.css">
    <title>Formulario Registros</title>
</head>

<body>
    <section>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="form-registro" method="POST">
            <h4>Formulario adicionar integrantes</h4>
            <input class="control" type="text" name="id" id="" placeholder="Ingrese codigo estudiante">
            <input class="control" type="text" name="nombre" id="" placeholder="Ingrese nombre estudiante">
            <input class="boton" type="submit" value="ADD" name="submit">
            <?php
            echo "<div> {$mensaje} </div>";
            ?>
        </form>
    </section>
</body>

</html>