<?php 

    $edad = rand(0,120);

    if($edad > 18) {
        printf('Es mayor de edad, tiene: '.$edad);
    }else{
        printf('No es mayor de edad, tiene: '.$edad);
    }


?>