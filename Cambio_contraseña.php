<?php
session_start();
// Verifica si se ha enviado el formulario
if(isset($_POST['boton_guardar_contraseña_nueva'])) {
    
    include("Conexion.php");

    // Recupera el Email del usuario y la nueva contraseña
    $email = $_SESSION['email'];
    $new_password = mysqli_real_escape_string($conex, $_POST['input_cambio_contraseña']);

    // Actualiza la contraseña en la base de datos SIN encriptar
    $query = "UPDATE registrousuario SET contraseña = '$new_password' WHERE email = '$email'";

    if(mysqli_query($conex, $query)) {
        echo '<script language="javascript">alert("Contraseña actualizada correctamente.");</script>';
    } else {
        echo "Error al actualizar la contraseña: " . mysqli_error($conex);
    }

    // Cierra la conexión
    mysqli_close($conex);
}
?>


