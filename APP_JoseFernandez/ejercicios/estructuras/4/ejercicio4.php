<?php 

    $piso = 1;
    $puerta = 1;

    for ($i=1; $i < 6; $i++) { 
        $piso = $i;
        for ($x=1; $x < 5; $x++) { 
            $puerta = $x;

            printf('Piso '.$piso.'- Puerta '.$puerta. '\n');
        }
        
    }

    ?>