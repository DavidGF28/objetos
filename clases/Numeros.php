<?php

namespace clases;

class Numeros extends Vector{
    private $media;
    public function setMedia(){
        $this->media= array_sum($this->getValores())/count($this->getValores());
        
    }

    public function getMedia(){
        return $this->media;    
    }

    public function setModa(){
        $salida= array_count_values($this->getValores());
        $repeticionesMaximas=max($salida);
        $this->moda=[];
        foreach ($salida as $numeros=>$repes){
            If($repes==$repeticionesMaximas){
            $this->moda[]=$numeros;
            }
        }
    }
    public function setValores($valores) {
                parent::setValores($valores);
        $this->setModa();
        $this->media();
    }
    
        
    public function __construct($valores = []) {
        parent::__construct($valores);
        $this->setValores($valores);
    }

}