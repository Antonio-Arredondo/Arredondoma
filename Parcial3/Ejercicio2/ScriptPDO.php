<?php

$usuario = 'root';
$contraseña = '';

    try {
        $conection = new PDO('mysql:host=localhost;dbname=Arredondoma', $usuario, $contraseña);
            foreach($conection->query('SELECT * from tabUsuarios') as $fila) {
                print_r($fila);
    }
    $conection = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
