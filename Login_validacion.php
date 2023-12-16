<?php
$Email=$_POST['email'];
$Contraseña=$_POST['contraseña'];
session_start();
$_SESSION['email']=$Email;

include('Conexion.php');

$consulta="SELECT * FROM registrousuario WHERE email='$Email' and contraseña='$Contraseña'";
$resultado=mysqli_query($conex,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas) {
    header("location: Bienvenida.html");
}else {
    ?>
    <?php
    include("Login.html");
    ?>
    echo '<script language="javascript">alert("ERROR EN LA AUTENTIFICACION");</script>';
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conex);
