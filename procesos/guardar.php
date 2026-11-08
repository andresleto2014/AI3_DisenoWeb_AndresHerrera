<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php');
    exit;
}

require '../config/conexion.php';

try {

    $conexion = new Conexion();
    $db = $conexion->conectar();

    $cedula = $_POST['cedula'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];

    $sql = "INSERT INTO clientes
            (
                cedula,
                nombres,
                apellidos,
                telefono,
                correo,
                direccion
            )
            VALUES
            (
                :cedula,
                :nombres,
                :apellidos,
                :telefono,
                :correo,
                :direccion
            )";

    $stmt = $db->prepare($sql);

    $stmt->execute([
        ':cedula' => $cedula,
        ':nombres' => $nombres,
        ':apellidos' => $apellidos,
        ':telefono' => $telefono,
        ':correo' => $correo,
        ':direccion' => $direccion
    ]);

    header('Location: ../index.php');
    exit;

} catch (PDOException $e) {

    echo "Error al guardar el cliente.";

}