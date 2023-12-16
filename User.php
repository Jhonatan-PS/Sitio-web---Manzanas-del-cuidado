<?php
session_start();
include('Conexion.php');

$email = $_SESSION['email'];

$sql = "SELECT tipoDocumento, documento, nombres, apellidos, contraseña, telefono, email, ciudad, direccion, ocupacion, servicios FROM registrousuario WHERE email='".$email."'";
    $resultado = $conex->query($sql);

    while($data=$resultado->fetch_assoc()){        
        $tipoDocumento = $data['tipoDocumento'];
        $documento = $data['documento'];
        $nombres = $data['nombres'];
        $apellidos = $data['apellidos'];
        $contraseña = $data['contraseña'];
        $telefono = $data['telefono'];
        $email = $data['email'];
        $ciudad = $data['ciudad'];
        $direccion = $data['direccion'];
        $ocupacion = $data['ocupacion'];
        $servicios = $data['servicios'];
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./Imagenes/Logo de Manzanas del cuidado.png" type="image/png">
    <script src="Funcionamiento.js"></script>
    <link rel="stylesheet" href="Estilo2.css">
    <style>
        .Info_User h3 {
            font-weight: bold;
            font-size: 20px;  
        }

        .cs-link {
            position: absolute;
            top: 50px;
            right: 11px; 
        }

        .cs-icon {
            width: 55px;
            height: 55px;
            cursor: pointer;
            transition: 0.3s ease-in-out, transform 0.2s ease-in-out;
        }

        .cs-icon:hover {
            transform: scale(1.3);
        }
    </style>
    <title>User</title>
</head>
<body>
    <header>
        <a href="User.html" class="user-link">
            <img src="./Imagenes/Muñeco de login.png" alt="Muñeco de usuario" class="user-icon">
        </a>     
        <a href="CerrarSesion.php" class="cs-link">
            <img src="./Imagenes/Logo de cerrar sesion.png" alt="Logo de cerrar sesion" class="cs-icon">
        </a>  
        <a href="Bienvenida.html">
            <img src="./Imagenes/Logo de Manzanas del cuidado.png" alt="Logo de Manzanas del ciudado" id="Logo_Manzanas_del_cuidado">
        </a>
    </header>
    <nav>
        <img src="./Imagenes/Manzanas del cuidado frase .png" alt="Frase de manzanas del cuidado">
    </nav>    
        <ul id="menu_funciones">
            <li class="menu-item">Registro
              <ul class="submenu">
                <li id="li_submenu-1"><a href="Registro municipios.html">Registro municipios</a></li>
                <li id="li_submenu-2"><a href="Registro manzanas.html">Registro manzanas</a></li>
                <li id="li_submenu-3"><a href="Registro establecimientos.html">Registro establecimientos</a></li>
                <li id="li_submenu-4"><a href="Registro servicios.html">Registro servicios</a></li>
              </ul>
            </li>
            <li class="menu-item"><a href="Propon tu manzana.html">Propon tu manzana del cuidado mujer cuidadora</a></li>
            <li class="menu-item"><a href="Asignacion manzana del cuidado.html">Asignación manzana del cuidado</a></li>
        </ul>
    <div id="Info_bienvenida">
        <div class="Info_User">
            <h3>Tipo de documento:</h3><?php echo $tipoDocumento;?>
            <h3>Documento:</h3><?php echo $documento;?>
            <h3>Nombres:</h3><?php echo $nombres;?>
            <h3>Apellidos:</h3><?php echo $apellidos;?>
            <h3>Telefono:</h3><?php echo $telefono;?>
            <h3>Correo electrónico:</h3><?php echo $email;?>
            <h3>Ciudad:</h3><?php echo $ciudad;?>
            <h3>Dirección:</h3><?php echo $direccion;?>
            <h3>Ocupación:</h3><?php echo $ocupacion;?>
            <h3>Servicios en los que le gustaria participar:</h3><?php echo $servicios;?>
        </div> 
        <form action="Cambio_contraseña.php" method="post" class="Info_User_restaurar_contraseña">
            <h2>Restaurar contraseña</h2>
            <h4>Contraseña nueva:</h4> <input type="password" class="Input_cambio_contraseña" name="input_cambio_contraseña">
            <br>
            <br>
            <br>
            <button type="submit" name="boton_guardar_contraseña_nueva" class="Boton_guardar_contraseña_nueva">Guardar</button>
        </form>       
    </div>   
    <div id="Encuentra_tu_manzana">
        <h2><b>¡Encuentra aquí la Manzana del Cuidado más cercana y empieza ya a disfrutar sus servicios GRATIS!</b></h2>
        <button id="Boton_Ve_ahora">Ve ahora</button>
    </div>
</body>

</html>