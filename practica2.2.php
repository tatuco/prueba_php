<?php
    if (!isset($_GET['N'])) {
        echo "Debes enviar la variable N";
    } else {
        $N = $_GET['N'];
        $cont = 0;
        for ($i = 2; $i <= abs($N); $i++) {
            for ($j = 1; $j <= $i; $j++) {
                if ($i % $j == 0) { 
                    $cont++;
                } 
            }
            if ($cont == 2) 
            echo $i;
            $cont = 0;
        }
    }
    

