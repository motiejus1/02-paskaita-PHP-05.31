<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02-paskaita</title>
</head>
<body>
    <?php 
    //Operatoriai ir matematiniai veiksmai
    $sk1 = 10;
    $sk2 = 15;

    //Suma 
    $suma = $sk1 + $sk2;
    echo $suma;

    //Atimtis
    $atimtis = $sk1 - $sk2;
    echo "<br>";
    echo $atimtis;

    //Daugyba
    $daugyba = $sk1 * $sk2;
    echo "<br>";
    echo $daugyba;

    //Dvi dalybas: paprasta dalyba ir liekana
    $dalyba = $sk1 / $sk2; // 10/15 = 0.666666666
    echo "<br>";
    echo $dalyba;
    // grazintu tiktai sveikaja dali
    $dalybosSveikojiDalis = intval($dalyba); // 10/15 = 0
    echo "<br>";
    echo $dalybosSveikojiDalis;

    //Liekana
    $liekana = $sk1 % $sk2; // 10 % 15 = 10 
    echo "<br>";
    echo $liekana;

    //kvadratine saknis
    $saknis = sqrt($sk1);// 10 //Math.sqrt
    echo "<br>";
    echo $saknis;

    //kelimas laipsniu
    $laipsnis = $sk1 ** $sk2; // 10^15
    echo "<br>";
    echo $laipsnis;

    //bet kokio laipsnio saknis
    // 4 laipsnio sakni
    $sk1 = 16;
    $ntojisaknis = $sk1 ** (1/4); // 2
    echo "<br>";
    echo $ntojisaknis;

    //pow - deprecated

    $veiksmas = 2 * (2 + 2); //6 -> 8
    echo "<br>";
    echo $veiksmas;

    //kelimas 4 laipsniu
    $ketvirtaslaipsnis = 5 ** 4;
    echo "<br>";
    echo $ketvirtaslaipsnis;    
    ?>

    <?php 
    //Tekstas + skaicius;
    $skaicius = 205;
    $tekstas = "Labas";

    $suma = $skaicius . $tekstas;
    
    echo "<br>";
    echo $suma;


    //negalimas

    // $atimtis = $skaicius - $tekstas;
    
    // echo "<br>";
    // echo $atimtis;

    $tekstas1 = "labas";
    $tekstas2 = "iki";

    $sujunk = $tekstas1 . $tekstas2;
    echo "<br>";
    echo  $sujunk;
    ?>

    <?php 
    $a = 2;
    $b = 5;
    $a = $b; //$a ? 5

    //sutrumpinimai
    $a += $b; // $a = $a + $b //10
    $a -= $b; // $a = $a - $b //5
    $a *= $b; // $a = $a * $b // 25
    $a /= $b; // $a = $a / $b // 5
    $a %= $b; // $a = $a % $b // 0

    // i++;
    $a++; //1
    $b--; //4
    ?>

    <?php 
    //salygos sakinys
    
    $ska = 12;
    $skb = 5;

    // jeigu ska > skb, atvaizduoti siu skaiciu suma, kitu atveju atvaizduoti siu skaiciu 
    //sandauga
    if($ska > $skb) {
        $suma = $ska + $skb;
        echo $suma;
    } else {
        $sandauga = $ska * $skb;
        echo $sandauga;
    }

    // Patikrinti ar trikampis yra statusis, bukasis, smailusis

    $a = 3; //Statusis trikampis
    $b = 3;
    $c = 3;

    if($c*$c == $a*$a + $b*$b){
        echo "trikampis yra statusis";
    } else if($c*$c > $a*$a + $b*$b) {
        echo "trikampis yra bukasis";
    } else {
        echo "trikampis yra smailusis";
    }
    
    //1. Suprogramuokite skript??, kuris rast?? did??iausi?? skai??i?? i?? dviej?? apra??yt??.

    // Papildomai:
    //  *Rezultatas i??vedamas neaktyviame(disabled) input laukelyje.

    $pirmas = 85;
    $antras = 102;
    $maksimalus = 0;

    if($pirmas > $antras ) {
        $maksimalus = $pirmas;
    } else {
        $maksimalus = $antras;
    }
    echo ""
    echo "<input class='neaktyvus' disabled='true' />";



    ?>
</body>
</html>