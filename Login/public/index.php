<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../public/css/estilos.css">
</head>
<body>
     
    <div class="container">
        <div class="form-box">
            <div class="buttom-box">
                <button type="button" class="toggle-btn">Iniciar Sesión</button>
            </div>
            <div class="cabezal">
                <a href="https://igc.edu.pe/"><img src="https://i.ibb.co/BzkBQvd/igclogo.jpg" alt="igclogo" border="0"></a>
            </div>

            <div class="redes-sociales">
                <img src="imagenes/gmail.png" alt="icon_gmail">
                <img src="imagenes/fb.png" alt="icon_facebook">
                <img src="imagenes/linkdn.png" alt="icon_linkdn">
            </div>
            <form  action="../public/ingresar/LoginAuth.php" method="POST" id="login" class="input-group">    
                
                <?php if(isset($_GET['error'])) { ?>
                        <p><?php echo $_GET['error'] ?></p>
                <?php } ?>

                <input type="text" class="input-field" placeholder="Usuario o e-mail" name='usuario_reg' required >
                <input type="password" class="input-field" placeholder="Contraseña" name="contraseña_reg" required>
                <input type="checkbox" class="check-box"><span>Recordar Contraseña</span>
                <button type="submit" href="https://aulavirtual.igc.edu.pe/main/link/link.php" class="submit">Iniciar Sesión</button>
                <span class="o">¿Aún no tienes una cuenta?</span>
    

            </form>
            <form action="../public/registro.php" id="registrar" class="input-group2">

                <button type="submit" class="boton" >¡Registrate!</button>
            
            </form>

            

        </div>
    </div>


</body>
</html>