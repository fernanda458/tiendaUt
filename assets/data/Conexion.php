<?php
try{
    $con=new PDO('mysql:host=localhost;dbname=',
    'root',
    '');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
    echo 'conectado a la base de datos <br><br>';
    $strat =$con->prepare('SELECT nombre FROM usuario';
    $strat->execute();

    // Regresa el registro del usuario juan
    $user='Juan';

    $stmt=$con->prepare('SELECT nombre,correo_e FROM usuario WHERE usuario=:usuario');
    $stmt->binParam(':usuario',$user,PDO::PARAM_STR);
    $stmt->execute(array(':usuario'=$user));

    while ( $datos= $strat->fetch()){
        echo 'Nombre: ' .$datos[0]. '<br>';

    }
    catch (PDOException $){
        dia('Error conectando con la base datos :' 
            .$e->getMessage());
    }
}