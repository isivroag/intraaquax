<?php
    class conn{
        
        function connect(){
        
            define('servidor','grupoaquax.mx');
            define('bd_nombre','grupoaqu_main');
            define('usuario','grupoaqu_root');
            define('password','GpoAquax.2024#');

            $opciones=array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

            try{
                $conexion=new PDO("mysql:host=".servidor.";dbname=".bd_nombre, usuario,password, $opciones);
                return $conexion;
            }catch(Exception $e){
                return null;
            }
        }
    }
?>