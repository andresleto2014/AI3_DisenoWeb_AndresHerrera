<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Sistema de registros de clientes</title>
    </head>

    <body>
        <h1>Sistema de registros de clientes</h1>
        <form action="procesos/guardar.php" method="POST">

            <label>cedula: </label>
            <input type="text"
                   name="cedula"
                   maxlength="10"
                   required>
            <br><br>

            <label>nombre: </label>
            <input type="text"
                 name="nombres"
                 required>
             <br><br>

            <label>apellidos: </label>
            <input type="text"
                 name="Apellidos"
                 required>
             <br><br>

            <label>telefono: </label>
            <input type="text"
                 name="Telefono"
                 required>
            <br><br>

            <label>Correo:</label><br>
            <input type="email"
                name="Correo"
                required>
            <br><br>

            <label>direccion:</label><br>
            <input type="text"
                name="Direccion"
                required>
            <br><br>

            <button type="submit">
                Guardar Cliente
            </button>

        </form>

        <a href="listar.php">
            Ver Clientes Registrados
        </a>

    </body>


</html>