<?php
        include ('../config/conexiondatos.php');

        $usuario_reg = $_POST ['usuario_reg'];
        $correo_reg = $_POST ['correo_reg'];
        $contraseña_reg = $_POST ['contraseña_reg'];
        $confirm_reg = $_POST ['confirm_reg'];
        $nombre_completo = $_POST ['nombre_completo'];
        $DNI = $_POST ['DNI'];
        $n_celular = $_POST ['n_celular'];
        $domicilio = $_POST ['domicilio'];
        $cursos = $_POST ['cursos'];
        $tipo_usuario = $_POST ['tipo_usuario'];
        $oficina_rrhh = $_POST ['oficina_rrhh'];
        $jefe_rrhh = $_POST ['jefe_rrhh'];
        $contacto_jefe_rrhh = $_POST ['contacto_jefe_rrhh'];
        $oficina_capa = $_POST ['oficina_capa'];
        $jefe_capa = $_POST ['jefe_capa'];
        $contacto_jefe_capa = $_POST ['contacto_jefe_cap'];

    
        $contraseña_reg = password_hash($contraseña_reg, PASSWORD_DEFAULT);

        $query = "INSERT INTO datos(usuario_reg, correo_reg, contraseña_reg, confirm_reg,nombre_completo, DNI, n_celular, domicilio, cursos, tipo_usuario, oficina_rrhh,	jefe_rrhh, contacto_jefe_rrhh, oficina_capa, jefe_capa, contacto_jefe_capa)
        VALUES('$usuario_reg','$correo_reg','$contraseña_reg','$confirm_reg','$nombre_completo', '$DNI', '$n_celular','$domicilio','$cursos','$tipo_usuario','$oficina_rrhh','$jefe_rrhh','$contacto_jefe_rrhh','$oficina_capa','$jefe_capa','$contacto_jefe_capa') ";

        $ejecutar = mysqli_query($conexiondatos, $query);

        if ($ejecutar) {
            echo ' 
                <script>
                alert ("Sus datos se han almacenado correctamente, nos contactaremos con usted a la brevedad");
                window.location = "../index.php";
                </script>
            ';

            exit();
        }else {
            echo'
                <script>
                    alert ("Inténtelo nuevamente, ocurrió un problema con el registro de datos");
                    window.location = "../ingresar/registrar_datos.php";
                </script>
            ';
        }
        mysqli_close($conexiondatos);

?>