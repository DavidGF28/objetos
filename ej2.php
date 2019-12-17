<?php

spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

use clases\Vector;

$a=new Vector();

?>
