<?php

class Texto {
    private $cadena;
    private $Nvocales;
    private $novocales;
    private $frecuenciavocales=[];
            
    function __construct($cadena="") {
        $this->setCadena($cadena);
    }
        
    public function longitud(){
        return mb_strlen($this->cadena);
    }
    
    public function setCadena($cadena){
        $this->cadena=$cadena;
        $this->Nvocales= $this->vocales();
        $this->Nnovocales=$this->novocales();
        $this->frecuenciavocales= $this->frecuenciavocales();
        return $this;
    }
    
    public function getCadena($imprimir=0){
        return ($imprimir ? "la cadena es " . $this->cadena : $this->cadena);
      //return "la cadena es " . $this->cadena;
    }
    public function getNoVocales() {
        return $this->novocales;
    }
    
    function getVocales() {
    return $this->Nvocales;
    }
    public function getfrecuenciavocales(){
        return $this->frecuenciavocales;
    }

    

    private function vocales(){
    $vocales=["a","e","i","o","u","á","é","í","ó","ú"];
$salida=0;
foreach ($vocales as $valor){
     $salida+= substr_count(mb_strtolower($this-> getCadena()),$valor);   
}
return $salida;
}
function novocales(){
return $this->longitud()-$this->Nvocales;
}
private function frecuenciavocales(){
    $texto= mb_strtolower($this->getCadena());
    $texto= str_replace(["á","é","í","ó","ú"],["a","e","i","o","u"] ,$texto);
    $vector= str_split($texto);
    $vocales=[
        "a"=>0,
        "e"=>0,
        "i"=>0,
        "o"=>0,
        "u"=>0,
        ];
    $salida= array_intersect_key(array_count_values($vector),$vocales);
    $salida= array_merge($vocales,$salida);
    
    return $salida;
}
}