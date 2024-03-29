<?php
include("config.php");

// Consulta para obtener datos de promociones
$query = "SELECT * FROM tb_promociones WHERE Estado = 1";
$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <link rel="stylesheet" type="text/css" href="css/home.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Promociones</title>
</head>
<body>

<!-- Creamos un menú -->
<div class="icon-bar">
    <a href="registro_promociones.php"><i class="fa fa-registered"></i></a>
    <a href="home.html"><i class="fa fa-home"></i></a>
</div>

<h2>Promociones</h2>
<hr>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Fecha de Inicio</th>
        <th>Fecha de Fin</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>

    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['Id_promociones'] . "</td>";
        echo "<td>" . $row['Nombre'] . "</td>";
        echo "<td>" . $row['Fecha_inicio'] . "</td>";
        echo "<td>" . $row['Fecha_fin'] . "</td>";
    
        echo "<td><a href='actualizar_promociones.php?id=" . $row['Id_promociones'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
        echo "<td><a href='eliminar_promociones.php?id=" . $row['Id_promociones'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
