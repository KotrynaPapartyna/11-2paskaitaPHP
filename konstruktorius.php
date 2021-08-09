<?php


// funkcija (metodas) kuri pasileidzia objekto sukurimo metu yra konstruktorius 

class Automobilis {
    // modelis
    // marke
    // gamybos metai 

    // Acces modifier
    // public- prieinamas kintamasis. nusako kintamojo prieinamuma 
    // kai bus sukurtas objektas ir metodas, tai kintamasis arba metodas bus pasiekiemas uz klases ribu 
    // privatus- reiskia, kad kintamasis arba metodas gali buti naudojamas tik pacioje klaseje (kitur negalios)
    // protected- kintamasis/ metodas kuris gali buti naudojamas pacioje klaseje ir jos vaikinese klasese
    

    private $spalva; 
    public $modelis;
    public $marke;
    public $gamybosMetai; 

    // METODAI/ VIDINES FUNKCIJOS. 
    // paleidimo funkcija, priskiria kintamuosius. pagal tai bus sukuriamas objektas
    // sablonas sistemoje nefiguruoja kol nesukuriamas objektas
    // funkcija yra public, bet galima padaryti private arba protected 
    function __construct($a, $b, $c) {
        $this->modelis=$a; 
        $this->marke=$b;
        $this->gamybosMetai=$c;
    }
}
// objekto paleidimas 
// rodoma sintakses klaida nes yra kuriamos naujos reiksmes
$automobilis=new Automobilis("VW", "golf", "1985"); 
$automobilis1=new Automobilis("BMW", "Passat320", 2006); 

// susikuriamas masyvas ir kintamieji tampa masyvo elementai 
$automobiliu_masyvas=array($automobilis, $automobilis1); 

// issivedame objekta su var_dump
var_dump($automobiliu_masyvas); 
var_dump ($automobilis); 
var_dump ($automobilis1); 

// paleidimo funkcija 
//$automobilis->kintamujuNustatymas("VW", "Passat", "2010"); 


?>