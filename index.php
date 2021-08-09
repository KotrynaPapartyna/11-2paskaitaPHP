<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php
// klase ir objektai 
// php objekto sukurimui reikalingas sablonas

// KLASE yra objekto sablonas, pagal kurio duomenis yra kuriamas objektas
// OBJEKTAS tai tam tikras kintamuju ir metodu (vidiniu objekto funkciju rinkinys)


// class- klase- objekto sablonaS

// KLASE- pavadinimas- is didziosios raides 
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
    function kintamujuNustatymas ($a, $b, $c) {
        $this->modelis=$a; 
        $this->marke=$b;
        $this->gamybosMetai=$c;
        $this->spalva="raudona"; 
    }
}

// kuriamas objektas. $automobilis- yra objektas. 
// kintamasis- new- klases pavadinimas- gaunasi objektas
    $automobilis=new Automobilis(); 

    // issivedame objekta su var_dump
    var_dump($automobilis); 

    // paleidimo funkcija 
    $automobilis->kintamujuNustatymas("VW", "Passat", "2010"); 


    // tik automobilio modelio isvedimas
    echo $automobilis->modelis; // po -> kintamojo pavadinimas be $ zenklo
    echo "<br>"; 
    // markes isvedimas
    echo $automobilis->marke; // po -> kintamojo pavadinimas be $ zenklo
    echo "<br>";
    // gamybos metu isvedimas 
    echo $automobilis->gamybosMetai; // po -> kintamojo pavadinimas be $ zenklo
    echo "<br>";

    
    // isvesti private kintamojo negalima, nes ji galima naudoti tik "class" ribose
    // echo $automobilis->spalva; 
    // echo "<br>";


    // galima sukurti nauja kintamaji 
    $naujasKintamasis=$automobilis->modelis;
    echo $naujasKintamasis; 


    // kreipiame i objekta-> kintamasis be $ zenklo ir pakeiciamas pavadinimas
    $automobilis->modelis="BMW"; 
    echo "<br>";
    echo $automobilis->modelis;

    var_dump($automobilis); 

?> 



</body>
</html>
