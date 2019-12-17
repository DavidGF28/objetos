<?php
require_once 'Texto.php'; //cargando clase

$a=new Texto("ejemplo"); //creando objetos
$b=new Texto();

echo $a->getCadena(1);
echo $b->getCadena(1);

echo $a->getVocales();
$b->setCadena("texto para pruebas");
echo $b->getCadena(1);
echo $b->getVocales();
echo $b->getNoVocales();
var_dump($b->setCadena("Controloa")->getfrecuenciavocales());
