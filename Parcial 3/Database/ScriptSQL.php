<?php
$servername = "localhost";
$username = "Antonio";
$password = "Genocide801*";

// Se crea la conexion
$conn = new mysqli($servername, $username, $password);

// Revisamos la conexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Creacion de la base de datos
$sql = "CREATE DATABASE Registro";

if ($conn->query($sql) === TRUE) {
  echo"Base de datos creada correctamente.";
} 
else {
  echo"Error en la creacion de la base de datos: " . $conn->error;
}

// cierra la conexion
mysqli_close($conn);

$db = "registro";   
  //Conexion a la base de datos con el nombre de la base
  $conn = new mysqli($servername, $username, $password, $db); 
  
  // Se crea la tabla
  $sql = "CREATE TABLE Usuarios  (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    Usuario VARCHAR(30) NOT NULL,
    Contraseña VARCHAR(30) NOT NULL)";

    // verificamos que se haya creado
  if ($conn->query($sql) === TRUE) {  
    echo"tabla creada correctamente.";
  }
  else {
    echo"Error en la creacion de la tabla: " . $conn->error;
  }

mysqli_close($conn);
