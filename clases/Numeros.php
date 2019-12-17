<?php

namespace clases;

class Numeros extends Vector{
    public function __construct($valores = array()) {
        parent::__construct($valores);
    }
    public function getMaximo() {
       if (empty($this->getValores()))
           $this->maximo=null;
       //else
    }
    
    public function getModa() {
      
    }

    public function setModa(){
        $this->moda=10;
    }
}
