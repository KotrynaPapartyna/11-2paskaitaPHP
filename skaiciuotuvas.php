<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>skaiciuotuvas</title>
</head>
<body>

<form action="skaiciuotuvas.php" action="get">
    <input type="text" name="sk1" value="15"/>
    <input type="text" name="veiksmas" value="+"/>
    <input type="text" name="sk2" value="20"/>
    
<button type="submit" name="skaiciuoti">Skaiciuoti</button>
</form>

<?php
// objektiniu principu sukurti skaiciuotuva
// sudetis, atimtis, dalyba, daugyba, liekana, saknies traukimo, kelimas laipsniu

// susikuriam classe- apsirasom, neisvedant ji neegizstuoja
// galima pradziai apsirasyti o tada susikurti 
class skaiciuotuvas {
    private $sk1;
    private $sk2; 
    private $rezultatas; 
    private $veiksmas; 

    // objekto vidiniams kintamiesiems, turime priskirti kintamuosius 
    // veiksmai vykdomi klases sukurimo viduje todel galima ir su private
    function __construct($sk1, $sk2, $veiksmas) {
        // kintamuju priskyrimas
        $this->sk1=floatval($sk1); // floatval- pakelia i realu skaiciu 
        $this->sk2=floatval($sk2); 
        $this->veiksmas=$veiksmas; 

        // tikrins koks zenklas yra ivestas
        switch($this->veiksmas) {
            case "+":
                $this->suma(); 
                break; 
            case "-":
                $this->atimtis(); 
                 break;
            case "*":
                $this->daugyba(); 
                break;
            case "/":
                $this->dalyba(); 
                break;
            case "%":
                $this->dalybasuLiekana(); 
                break;
            case "saknis":
                $this->saknis(); 
                break;
            case "kelimaslaipsniu":
                $this->kelimasLaipsniu(); 
                break;
            default:
              echo "neteisingas veiksmas"; // po default break nebutina     
        }

        // konstruktorius turi paleisti visas funkcijas
        $this->suma(); 
        $this->atimtis(); 
        $this->daugyba(); 
        $this->dalyba(); 
        $this->dalybaSuLiekana(); 
        $this->kelimasLaipsniu(); 
        $this->saknis(); 

        // rezultato isvedimas/  objekto kintamojo isvedimas
        // echo $this->rezultatas;  

        // rezultato mygtuka galima sukurti ir taip
        //echo "<input type='tex' value='".$this->rezultatas."' disabled='true'>";  
    }
    // uzdejus private function- nerodytu veiksmo ir rezultato 

    private function suma() {
        $this->rezultatas= $this->sk1+$this->sk2; 
        echo "<br>"; 
        echo "suma".":". $this->rezultatas; 
        echo "<br>"; 
    }

    private function atimtis() {
        $this->rezultatas= $this->sk1-$this->sk2;
        echo "skirtumas".":". $this->rezultatas; 
        echo "<br>"; 
    }

    private function daugyba() {
        $this->rezultatas= $this->sk1 * $this->sk2;
        echo "sandauga".":". $this->rezultatas;
        echo "<br>"; 
    }

    private function dalyba() {
        $this->rezultatas= $this->sk1 / $this->sk2;
        echo "dalybos rezultatas".":". $this->rezultatas;
        echo "<br>"; 
    }
    
    private function dalybaSuLiekana() {
        $this->rezultatas= $this->sk1 % $this->sk2;
        echo "dalyba su liekana".":". $this->rezultatas; 
        echo "<br>"; 
    }

    private function saknis() {
        $this->rezultatas= sqrt($this->sk1). ($this->sk2);
        echo "saknies istraukimas".":". $this->rezultatas; 
        echo "<br>"; 
    }

    private function kelimasLaipsniu () {
        $this->rezultatas= (($this->sk1)**2). " ".(($this->sk2)**2);
        echo "pakelta 2 laipsniu".":". $this->rezultatas; 
        echo "<br>"; 
    }

}

if (isset($_GET["skaiciuoti"])) {
    if (isset($_GET["sk1"]) && !empty($_GET["sk1"]) && isset($_GET["sk2"]) && !empty($_GET["sk2"])&& isset($_GET["veiksmas"]) && !empty($_GET["veiksmas"])) {
        $sk1=$_GET["sk1"];
        $veiksmas=$_GET["veiksmas"];
        $sk2=$_GET["sk2"];
        // pagal sablona iskviesti objekta 
        $skaiciuotuvas= new Skaiciuotuvas($sk1, $sk2, $veiksmas); 

        // echo "bandymas iskviesti objekte esancia funkcija"; 
        // $skaiciuotuvas->suma();  // ERROR 


    } else {
        echo "vienas arba abudu laukeliai yra neskaicius arba tusti"; 
    }
}

?>
    
</body>
</html>