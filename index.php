<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Sistema de registros de clientes</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>

    <body>
        <h1>Sistema de registros de clientes</h1>
        <form action="procesos/guardar.php" method="POST">

            <label>cedula: </label>
            <input type="text"
                   name="cedula"
                   maxlength="10"
                   required>

            <label>nombre: </label>
            <input type="text"
                 name="nombres"
                 required>

            <label>apellidos: </label>
            <input type="text"
                 name="apellidos"
                 required>

            <label>telefono: </label>
            <input type="text"
                 name="telefono"
                 required>

            <label>Correo:</label><br>
            <input type="email"
                name="correo"
                required>

            <label>direccion:</label><br>
            <input type="text"
                name="direccion"
                required>

            <button type="submit">
                Guardar Cliente
            </button>

        </form>

        <a href="listar.php">
            Ver Clientes Registrados
        </a>

    </body>


</html>