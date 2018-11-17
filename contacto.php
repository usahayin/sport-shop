<?php

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $mensaje=$_POST['fecha'];
    $mensaje="
    $nombre=$_POST[nombre]
    apellido=$_POST[apellido]
    correo=$_POST[correo]
    telefono=$_POST[telefono]
    mensaje=$_POST[fecha]
    mensaje=$_POST[mensaje]";
    $headers ='From:usahayin98@gmail.com'."\r\n".
    'Replay-to:'.$_POST['correo']."\r\n".
    'X-Mailer:PHP/'.phpversion();
    mail($correo,$nombre,$mensaje,$headers);
    header("Location:enviado.html");
 


if (correo($para, $mensaje, utf8_decode($mensaje), $header))
    echo "<script type='text/javascript'>alert('tu mensaje ha sido enviado correctamente');</script";
    echo "<script type='text/javascript'>;</script";

?>
