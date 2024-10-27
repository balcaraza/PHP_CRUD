<?php
    //error_reporting(0);
    //credenciales de la DB
    $servidor="localhost";
    $usuario="root";
    $password="root";
    $base_datos="empleados";
    
    //conexion con mysql
    $conn=new mysqli($servidor, $usuario, $password, $base_datos);

    //verificar conexion
    if($conn->connect_error){
        die("Error de conexion: no se pudo conectar a mysql".$conn->connect_error);
    } 
    

?>