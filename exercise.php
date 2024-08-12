<?php

//Creiamo il nostro ZOO


Abstract class Animal {

    //ATTRIBUTI
    public $food;
    public $age;
    public $habitat;
    
    //METODI

    public function __construct($food, $age, $habitat){
        //VALORIZZARE GLI ATTRIBUTI
        $this->food = $_food;
        $this->age = $_age;
        $this->habitat = $_habitat;
    }

    public function nutriti(){
        echo "Questo animale è di tipo $this->food \n";
    }

}

class Lion extends Animal {

    public $criniera;
    public $sesso;

    public function __construct($food, $age, $habitat, $_criniera, $_sesso){
        parent::__construct($_food, $_age, $_habitat);
        $this->criniera = $_criniera;
        $this->sesso = $_sesso;

    }
    public function cacciaInBranco(){
        echo "Il leone sta cacciando in branco \n";

    }


}
class Eagle extends Animal {

    public $piuma;
    public $sesso;

    public function __construct($food, $age, $habitat){

    }
    public function volare(){
        echo "L'acquila sta volando \n";
    }
}

$simba = new Lion("carnivoro", 4, "savana", true, "Maschio");
$penny = new Eagle("carnivoro", 2, "montagna");

$simba->cacciaInBranco();
$simba->nutriti();

$penny->volare();
$penny->nutriti();
?>