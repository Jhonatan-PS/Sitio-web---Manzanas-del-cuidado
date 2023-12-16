<?php
    include("Conexion.php");

    if (isset($_POST['boton_registrarse'])) {
        if(
            strlen($_POST['tipoDocumento']) >= 1 &&
            strlen($_POST['documento']) >= 1 &&
            strlen($_POST['nombres']) >= 1 &&
            strlen($_POST['apellidos']) >= 1 &&
            strlen($_POST['contraseña']) >= 1 &&
            strlen($_POST['telefono']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['ciudad']) >= 1 &&
            strlen($_POST['direccion']) >= 1 &&
            strlen($_POST['ocupacion']) >= 1 &&
            strlen($_POST['servicios']) >= 1 
            ) {
                $tipoDocumento = trim($_POST['tipoDocumento']);
                $documento = trim($_POST['documento']);
                $nombres = trim($_POST['nombres']);
                $apellidos = trim($_POST['apellidos']);
                $contraseña = trim($_POST['contraseña']);
                $telefono = trim($_POST['telefono']);
                $email = trim($_POST['email']);
                $ciudad = trim($_POST['ciudad']);
                $direccion = trim($_POST['direccion']);
                $ocupacion = trim($_POST['ocupacion']);
                $servicios = trim($_POST['servicios']);
                $fecha = date("Y-m-d H:i:s");
                $consulta = "INSERT INTO registrousuario(tipoDocumento, documento, nombres, apellidos, contraseña, telefono, email, ciudad, direccion, ocupacion, servicios, fecha)
                    VALUES('$tipoDocumento', '$documento', '$nombres', '$apellidos', '$contraseña', '$telefono', '$email', '$ciudad', '$direccion', '$ocupacion', '$servicios', '$fecha')";
                $resultado = mysqli_query($conex, $consulta);
                if($resultado) {
                    ?>
                        echo '<script language="javascript">alert("Tu registro se a completado");</script>';
                    <?php
                } else {
                    ?>
                        echo '<script language="javascript">alert("Ocurrio un error");</script>';
                    <?php
                }                                
            }
    }
?>