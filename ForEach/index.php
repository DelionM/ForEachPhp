<?php
    echo "<h1>Estructura de repetición for y forEach </h1> <br>";

    $exp = 5;
    $base = 2;
    $resultado = 1;
    for($i=1; $i <= $exp; $i++){
        $resultado = $resultado * $base;
    }
    echo "<i> <h1> Resultado $resultado </h1> </i>";
?>