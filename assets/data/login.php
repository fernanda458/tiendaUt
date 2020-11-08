<?php

    $usuario = $_POST['inputUser'];
    $pass = $_POST['inputPassword'];

    $text="Nombre: ".$usuario."Contraseña: ".$pass;

    $datos=array('datos' => $text);


    echo json_encode($datos, JSON_FORCE_OBJECT);
?>

