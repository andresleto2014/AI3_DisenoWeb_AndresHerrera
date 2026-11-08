<?php

require 'config/conexion.php';

$conexion = new Conexion();

$db = $conexion->conectar();

echo "Conexión exitosa";