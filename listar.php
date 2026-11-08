<?php

require 'config/conexion.php';

$conexion = new Conexion();
$db = $conexion->conectar();

$sql = "SELECT * FROM clientes";

$stmt = $db->query($sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listado de Clientes</title>
</head>

<body>

    <h1>Listado de Clientes</h1>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>cedula</th>
            <th>nombres</th>
            <th>apellidos</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Direccion</th>
            <th>Fecha</th>
        </tr>

        <?php while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>

        <tr>

            <td><?= htmlspecialchars($fila['id_cliente']) ?></td>
            <td><?= htmlspecialchars($fila['cedula']) ?></td>
            <td><?= htmlspecialchars($fila['nombres']) ?></td>
            <td><?= htmlspecialchars($fila['apellidos']) ?></td>
            <td><?= htmlspecialchars($fila['telefono']) ?></td>
            <td><?= htmlspecialchars($fila['correo']) ?></td>
            <td><?= htmlspecialchars($fila['direccion']) ?></td>
            <td><?= htmlspecialchars($fila['fecha_creacion']) ?></td>

        </tr>

        <?php endwhile; ?>

    </table>

    <br>

    <a href="index.php">
        Volver al Registro
    </a>

</body>

</html>