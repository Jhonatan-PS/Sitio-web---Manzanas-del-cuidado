<?php
    include("Conexion.php");

    if (isset($_POST['boton_guardar_registro_manzanas'])) {
        if(
            strlen($_POST['codigo']) >= 1 &&
            strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['localidad']) >= 1 &&
            strlen($_POST['direccion']) >= 1 
            ) {
                $codigo = trim($_POST['codigo']);
                $nombre = trim($_POST['nombre']);
                $localidad = trim($_POST['localidad']);
                $direccion = trim($_POST['direccion']);
                $fecha = date("Y-m-d H:i:s");
                $consulta = "INSERT INTO registromanzanas(codigo, nombre, localidad, direccion, fecha)
                    VALUES('$codigo', '$nombre', '$localidad', '$direccion', '$fecha')";
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