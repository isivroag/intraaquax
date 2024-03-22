<?php
session_start();
include_once 'conexion.php';
$objeto = new conn();

date_default_timezone_set('America/Mexico_City');

$conexion = $objeto->connect();
if ($conexion != null) {
    //recepcion de los datos en el medodo post desde ajax code 
    $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
    $password = (isset($_POST['password'])) ? $_POST['password'] : '';
    $escuela = (isset($_POST['escuela'])) ? $_POST['escuela'] : '';

    $pass = md5($password);

    //$consulta = "SELECT * FROM w_usuario WHERE username='$usuario' AND password='$pass' and edo_usuario=1";
    //EVITAR INJECT
    $consulta = "SELECT * FROM w_usuario WHERE username=:usuario AND password=:contrasena and edo_usuario=1";
    $resultado = $conexion->prepare($consulta);

    $resultado->bindParam(':usuario', $usuario, PDO::PARAM_STR);
    $resultado->bindParam(':contrasena', $pass, PDO::PARAM_STR);

    $resultado->execute();

    if ($resultado->rowCount() >= 1) {
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['s_usuario'] = $usuario;
        foreach ($data as $row) {

            $_SESSION['s_id_usuario'] = $row['id_usuario'];
            $idusuario = $row['id_usuario'];
            $_SESSION['s_nombre'] = $row['nombre'];
            $_SESSION['s_rol'] = $row['rol_usuario'];
        }

        $navegador = $_SERVER['HTTP_USER_AGENT'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $hora = date('Y-m-d H:i:s');
        $idusuario = $_SESSION['s_id_usuario'];



        $consulta = "INSERT INTO bitacoraac (ip,navegador,fechacliente,usuario,nombre,obs) values ('$ip','$navegador','$hora','$idusuario','$usuario','CORRECTO')";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $resultado->closeCursor();


        setcookie("usuario", '', time() - 100, "/");
        setcookie("pass", '', time() - 100, "/");

        $consulta = "SELECT * from vuescuela where id_usuario='$idusuario' and nom_escuela='$escuela' and estado_reg='1'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        if($resultado->rowCount()>0){
            $registros = $resultado->fetchAll(PDO::FETCH_ASSOC);
            $id_escuela = 0;
            $nom_escuela = "";
            $bd_escuela = "";
            foreach ($registros as $reg) {
                $id_escuela = $reg['id_escuela'];
                $nom_escuela = $reg['nom_escuela'];
                $bd_escuela = $reg['bd_escuela'];
            }
            $_SESSION['id_escuela'] = $id_escuela;
            $_SESSION['nom_escuela'] = $nom_escuela;
            $_SESSION['bd_escuela'] = $bd_escuela;
            $resultado->closeCursor();
            
            $data=3;
        }else{
            $_SESSION['id_escuela'] = "";
            $_SESSION['nom_escuela'] ="";
            $_SESSION['bd_escuela'] = "";
            $data=5;
        }
       

    } else {
        $_SESSION['s_id_usuario'] = null;
        $_SESSION['s_usuario'] = null;
        $_SESSION['s_nombre'] = null;
        $_SESSION['s_rol'] = $row = null;
        $data = 1;
    }
    $resultado->closeCursor();
    print json_encode($data);
    $conexion = null;
} else {
    $data = 0;
    print json_encode($data);
    $conexion = null;
}
