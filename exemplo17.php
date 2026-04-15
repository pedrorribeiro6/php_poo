<?php

class Visibilidade{
    public $varPublic;
    protected $varProtected;
    private $varPrivate;

    public function __construct($varPublic, $varProtected, $varPrivate)
    {
        $this->varPublic = $varPublic;
        $this->varProtected = $varProtected;
        $this->varPrivate = $varPrivate;
    }

    public function publicFun(){
        echo "Método Público<br>";
    }
    
    protected function protectedFun(){
        echo "Método Protegido<br>";
    }
    
    private function privateFun(){
        echo "Método Privado<br>";
    }
    
}

$teste = new Visibilidade(1,2,3);
echo "Atributo Público = $teste->varPublic";
// echo "Atributo Protected = $teste->varProtected";
// echo "Atributo Private = $teste->varPrivate";

$teste->publicFun();
$teste->protectedFun();
$teste->privateFun();
