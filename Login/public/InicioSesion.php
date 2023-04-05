<?php

session_start();

        include 'conexiondatos.php';


        if (isset($_POST['usuario_reg']) && isset($_POST["contraseña_reg"]) ) {
            function validate ($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;


            }


            $usuario_reg = validate ($_POST['usuario_reg']);
            $contraseña_reg = validate ($_POST['contraseña_reg']);




            if (empty($usuario_reg)) {
                header("Location: index.php?error=El Usuario es requerido");
                exit();
            
            }elseif (empty($contraseña_reg)) {
                header("Location: index.php?error=La contraseña es requerido");
                exit();
            }else {
                $contraseña_reg = md5($contraseña_reg);

                $Sql = "SELECT * FROM datos WHERE usuario_reg = '$usuario_reg' AND contraseña_reg='$contraseña_reg'";
                $result = mysqli_query($conexiondatos, $Sql);

                if (mysqli_num_rows($result) === 1) {
                    $row = mysqli_fetch_assoc($result);
                    if ($row['usuario_reg'] === $usuario_reg && $row['contraseña_reg'] === $contraseña_reg) {
                            
                            $_SESSION ['usuario_reg'] = $row ['usuario_reg'];
                            $_SESSION ['nombre_completo'] = $row ['nombre_completo'];
                            $_SESSION ['id_datos'] = $row ['id_datos'];
                            header("Location: Inicio.php");
                            exit();

                    }else {
                        header("Location: index.php?error=El usuario o la clave es incorrecta");
                        exit();
                    }
                }else {
                    header("Location: index.php?error=El usuario o la clave es incorrecta");
                    exit();
                }

            }

        }else {
            header("Location: index.php");
                    exit();
        }

        
?>