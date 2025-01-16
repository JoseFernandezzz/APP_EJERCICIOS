<?php 

    $edad = rand(0,120);

    if($edad > 65 || $edad < 16) {
        printf('No esta en edad de trabajar, tiene: '.$edad);
    }else{
        printf('Esta en edad de trabajar, tiene: '.$edad);
    }


?>