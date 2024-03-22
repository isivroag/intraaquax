<?php
    class conn {
        function connect($db_nombre) {
            define('servidor', 'grupoaquax.mx');
            define('usuario', 'grupoaqu_root');
            define('password', 'GpoAquax.2024#');
    
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
    
            try {
                $conexion = new PDO("mysql:host=" . servidor . ";dbname=" . $db_nombre, usuario, password, $opciones);
                return $conexion;
            } catch (Exception $e) {
                return null;
            }
        }
    }
?>