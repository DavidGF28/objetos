<?php

namespace clases;

class Numeros extends Vector{
    private $media;
    
    public function getMedia(){
        return $this->media;    
    }

    public function setModa(){
        $this->moda=10;
    }
        public function __construct($valores = []) {
        parent::__construct($valores);
        $this->setModa();}

}