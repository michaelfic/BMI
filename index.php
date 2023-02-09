<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>BMI</title>
</head>

<?php
    setcookie("ciastko", "dobre");
    echo "dane wysłane:";

    echo "<br>";

    echo "<pre>";
        print_r($GLOBALS);
        echo "</pre>";
    
    if(isset($_POST['sex'])){
        if($_POST['sex'] === 'k'){
            echo "kobieta";
        } else {
            echo "facet";
        }
    
       } else {   
        echo "nie wybrales plci";
       }
    

    if(!empty($_GET['imie'])){
        echo "<br>Witaj " .$_GET['imie'];
    } else {
        echo "<br>Nie wpisales imienia";
    }    
    ?>


<body onLoad="preLoad()">
    <form class="form1">
        
    <input placeholder="Podaj imie" type="text" name="imie">
    <input type="submit" value="wyslij">
        <div class="gender">
            <div class="g1">
            <p>WYBIERZ PŁEĆ:</p>
            </div>
            <div class="g1">
            <input type="radio" id="m" name="gender" value="m" onClick="im('a1');" name="sex">
            <label for="m">M</label>
            <input type="radio" id="k" name="gender" value="k" onClick="im('a2');" name="sex">
            <label for="k">K</label>
            </div>
        </div>
    </form>
    <div class="imgs">
        <img id="ruler" src="ruler.png" height="375px">
        <img id="a">
    </div>
    <form class="form1">
        <div class="height">
            <label for="h">WZROST</label>
            <input type="range" min="40" max="250" value="180" id="h" name="wzrost">
            <input type="number" id="n1">
            <span id="value1"></span>
        </div>
        <div class="weight">
            <label for="w">WAGA</label>
            <input type="range" min="1" max="250" value="70" id="w" name="waga">
            <input type="number" id="n2">
            <span id="value2"></span>
        </div>
        <div class="submit">
            <input type="submit" value="SPRAWDŹ BMI">
        </div>
    </form>
    <script src="script.js">
    </script>
</body>
</html>