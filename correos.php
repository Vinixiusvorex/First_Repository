<?php
    $destinatario = 'brayansalazarpr@gmail.com';

    $nombre = $_POST['nombre'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde la página Maxitec"; 
    $mensajeCompleto = $mensaje . "\nAtentamentes: " . $nombre;

    mail($destinatario, $numero, $mensajeCompleto, $header);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    
?> 

