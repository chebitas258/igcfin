<?php 
    session_start();
    if (isset($_SESSION['id_datos']) && isset($_SESSION['usuario_reg'])){

    
?>


<!DOCTYPE html>
<html lang="esp"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Virtual</title>
</head>

<body>
        <CENTER>
            <h1>HOME</h1>
        </CENTER>

        <a href="../public/ingresar/CerrarSesion.php">Cerrar Sesion</a>



</body>

</html>

<?php  }else {
    header('location: ../public/index.php');
} ?>