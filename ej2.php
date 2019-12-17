<?php

spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

use clases\Vector;

$a=new Vector([1,1,1,2,2,2,3]);
$a->imprimirValores();
echo "el valor maximo es: ". $a->getMaximo();
echo "La Moda es: ".$a->getModa();
?>
