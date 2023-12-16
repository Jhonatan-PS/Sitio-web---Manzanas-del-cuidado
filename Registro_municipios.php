<?php
    include("Conexion.php");

    if (isset($_POST['boton_guardar_registro_municipios'])) {
        if(
            strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['numerodemanzanasconlasquecuenta']) >= 1 
            ) {
                $nombre = trim($_POST['nombre']);
                $numerodemanzanasconlasquecuenta = trim($_POST['numerodemanzanasconlasquecuenta']);
                $fecha = date("Y-m-d H:i:s");
                $consulta = "INSERT INTO registromunicipios(nombre, numerodemanzanasconlasquecuenta, fecha)
                    VALUES('$nombre', '$numerodemanzanasconlasquecuenta', '$fecha')";
                $resultado = mysqli_query($conex, $consulta);
                if($resultado) {
                    ?>
                        echo '<script language="javascript">alert("Tu registro se a guardado");</script>';
                    <?php
                } else {
                    ?>
                        echo '<script language="javascript">alert("Ocurrio un error");</script>';
                    <?php
                }                                
            }
    }
?>