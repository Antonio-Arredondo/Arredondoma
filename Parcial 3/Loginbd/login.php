<?php
require 'conexion.php';

$usuarios = $mysqli->("SELECT nombre, correo
FROM tabusuarios
WHERE usuario = '".$_POST['username']."'
AND contrasena = '".$_POST['pass']."'");

if($usuarios->num_rows == 1):
    $datos = $usuarios->fetch_assoc();
    echo json_encode(array('error'=> false, 'usuario' => $datos['usuario']));
else:
    echo json_encode(array('error' => true));
endif;

$mysqli->close();

?>