<?php
$mysqli = new mysqli('localhost','root','','l16100171');
if($mysqli->connect_errno):
    echo "Error al conectarse a la bd ".$mysqli->connect_error;
endif;
?>