<?php
    include("Conexion.php");

    if (isset($_POST['boton_guardar_propuesta'])) {
        if(
            strlen($_POST['nombredelamanzana']) >= 1 &&
            strlen($_POST['servicio']) >= 1 &&
            strlen($_POST['dia']) >= 1 &&
            strlen($_POST['hora']) >= 1 
            ) {
                $nombredelamanzana = trim($_POST['nombredelamanzana']);
                $servicio = trim($_POST['servicio']);
                $dia = trim($_POST['dia']);
                $hora = trim($_POST['hora']);
                $consulta = "INSERT INTO propontumanzanadelcuidado(nombredelamanzana, servicio, dia, hora)
                    VALUES('$nombredelamanzana', '$servicio', '$dia', '$hora')";
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