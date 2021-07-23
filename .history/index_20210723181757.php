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
    $liekana = $sk1 
    

    ?>
</body>
</html>