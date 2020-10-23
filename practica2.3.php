<?php 
 if (!isset($_GET['N'])) {
    echo "Debes enviar la variable N";
} else {
    $N = abs($_GET['N']);
    $html = '<html><body>';
    $html .= '<table id="matriz" onclick="duplicar()">';
    $array = matriz($N);
    foreach ($array as $x) {
        $html .= '<tr>';
        foreach ($x as $xy) {
            $html  .= '<td>'.$xy.'</td>';
        }
        $html .= '</tr>';
    }
    $html .= '</table></body></html>';
    $javascript = js();
    $html .= $javascript;
    echo $html;
}

 function js() {
     return "<script type='text/javascript'>
        const duplicar = () => {
            const table = document.getElementById('matriz');
            for (let i = 0, row; row = table.rows[i]; i++) {
                for (let j = 0, col; col = row.cells[j]; j++) {
                    col.innerHTML = Number(col.textContent) * 2
                }    
            }    
        }
     </script>";
}

 function matriz($n) {
     for ($x = 0; $x < $n; $x++) {
        for ($y = 0; $y < $n; $y++) {
            $r[$x][$y] = rand($n, 2*$n);
        }
     }
     return $r;
 }
