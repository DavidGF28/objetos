<?php
$texto="Ejemplo de clase";

function longitud($texto){
    $salida= mb_strlen ($texto);
    return $salida;
};
longitud($texto);


function vocales($texto){//$vocales = 0;
//$consonantes = 0;
//foreach (count_chars($texto, 1) as $i => $val) 
//	{
//	if (preg_match('/[aeiouáéíóúü]/i',chr($i)))
//            {
//	        $vocales = $vocales + $val;
//        } else{ 
//		        }					
//	}
//echo "<br> Vocales: $vocales";};
$vocales=["a","e","i","o","u","á","é","í","ó","ú"];
$salida=0;
foreach ($vocales as $valor){
     $salida+= substr_count(mb_strtolower($texto),$valor);   
}
return $salida;
}

vocales($texto);

function novocales($texto){
//$vocales = 0;
//$consonantes = 0;
//foreach (count_chars($texto, 1) as $i => $val) 
//	{
//	if (preg_match('/[aeiouáéíóúü]/i',chr($i)))
//            {} else if (preg_match('/[a-z]/i',chr($i)))
//		        {
//	             $consonantes= $consonantes + $val;
//		        }					
        }
//echo "Consonantes: $consonantes";};
//echo "<br>";
return longitud($texto)- vocales($texto);
novocales($texto);
//echo "<br>";
//echo "faltan en la cuenta 2 espacios";
function frecuenciavocales($texto){
    $texto= str_replace(["á","é","í","ó","ú"],["a","e","i","o","u"] ,$texto);
    $vector= str_split($texto);
    $vocales=["a"=>0,"e"=>0,"i"=>0,"o"=>0,"u"=>0,];
    $salida= array_intersect_key(array_count_values($vector),$vocales);
    $salida= array_merge($vocales,$salida);
    
    return $salida;
};
