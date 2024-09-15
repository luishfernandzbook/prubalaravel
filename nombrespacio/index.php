<?php

//require_once 'Modelos/Persona.php';

spl_autoload_register(function($clase){
    $ruta = "".str_replace("\\", "/", $clase).".php";
    if(is_readable($ruta)){
        require_once $ruta;
    }else{
        echo 'El archivo no existe';
    }
});


Modelos\Persona::Hola();