<?php
require_once "conexion.php";

$resultado = $conexion->query("SELECT * FROM formulario");
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Mensaje</th>
    </tr>

    <?php while($fila = $resultado->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $fila['id']; ?></td>
        <td><?php echo $fila['nombre']; ?></td>
        <td><?php echo $fila['correo']; ?></td>
        <td><?php echo $fila['mensaje']; ?></td>
    </tr>
    <?php } ?>

</table>