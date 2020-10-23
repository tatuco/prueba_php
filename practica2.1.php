<?php
if (!isset($_GET['N']) || !isset($_GET['S'])) {
    echo "Debes enviar las variables N y S en la url";
} else {
    $N = $_GET['N'];
    $S = $_GET['S'];
    $cont = 0;
    $message = '';
    while ($cont < abs($N)) {
        $cont++;
        $message .= $S;
    }
    echo $message;
}


