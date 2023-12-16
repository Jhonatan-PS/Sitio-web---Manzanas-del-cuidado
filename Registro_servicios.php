<?php
    include("Conexion.php");

    if (isset($_POST['boton_guardar_registro_servicios'])) {
        if(
            strlen($_POST['codigo']) >= 1 &&
            strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['descripcion']) >= 1 
            ) {
                $codigo = trim($_POST['codigo']);
                $nombre = trim($_POST['nombre']);
                $descripcion = trim($_POST['descripcion']);
                $fecha = date("Y-m-d H:i:s");
                $consulta = "INSERT INTO registroservicios(codigo, nombre, descripcion, fecha)
                    VALUES('$codigo', '$nombre', '$descripcion', '$fecha')";
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