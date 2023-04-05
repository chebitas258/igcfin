<?php
ob_start();
session_start();

// Incluimos el archivo de conexión
include('../config/conexiondatos.php');


// Inicializamos las variables de inicio de sesión
$usuario = "";
$contraseña = "";

// Verificamos si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtenemos el nombre y contraseña enviados en el formulario
  $usuario = $_POST["usuario_reg"];
  $contraseña = $_POST["contraseña_reg"];

  // Preparamos y ejecutamos la consulta para buscar al usuario en la base de datos
  $stmt = $conn->prepare("SELECT * FROM datos WHERE usuario_reg = :usuario AND contraseña_reg = :contrasena");
  $stmt->bindParam(':usuario', $usuario);
  $stmt->bindParam(':contrasena', $contraseña);
  $stmt->execute( );

  // Obtenemos el número de filas devueltas por la consulta
  $num_filas = $stmt->rowCount();

  // Si se encontró un usuario con el nombre y contraseña ingresados, iniciamos la sesión y redireccionamos al usuario a la página de inicio
  if ($num_filas == 1) {
    $_SESSION["usuario_reg"] = $usuario;
    header("location: ../Inicio.php");
  } else {
    // Si no se encontró un usuario con el nombre y contraseña ingresados, mostramos un mensaje de error
    $mensaje_error = "Nombre de usuario o contraseña incorrectos";
  }
}


ob_end_flush();




?>