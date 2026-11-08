<?php

class Conexion
{
    private $host = "localhost";
    private $dbname = "db_sistema_web";
    private $usuario = "root";
    private $password = "";

    public function conectar()
    {
        try {
            $conexion = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
                $this->usuario,
                $this->password
            );
            $conexion->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
            return $conexion;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
        } catch (PDOException $e) {

            die("Se presento un error al conectarse con la base de datos");

        }
    }
}