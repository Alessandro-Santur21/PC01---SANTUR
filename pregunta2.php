
<?php

    $Nombre = $_POST['nombre'];
    $Dirección = $_POST['Direción'];
    $Email = $_POST['e-mail'];
    $Edad = $_POST['edad'];
    
   
    echo "<h1>Bienvenido<h1>";
    echo "¡Hola " . $Nombre . "! <br>";
    echo "Tu dirección es " . $Dirección . "<br>";
    echo "Tienes " . $Edad . "y tu correo es " . $Email;



?>
