<?php 

//isset
//empty

if(isset($_GET["skaicius1"]) && !empty($_GET["skaicius1"]) && isset($_GET["skaicius2"]) && !empty($_GET["skaicius2"]) ) {
    $pirmas = $_GET["skaicius1"];
    $antras = $_GET["skaicius2"];
    $maksimalus = 0;

    if($pirmas > $antras ) {
        $maksimalus = $pirmas;
    } else if($pirmas < $antras) {
        $maksimalus = $antras;
    } else {
        $maksimalus = "Abu skaiciai lygus";
    }
    echo "<br>";

    //1 budas
    echo "<input class='neaktyvus' disabled='true' value='$maksimalus' />";

    // 2 budas
    echo "<input class='neaktyvus' disabled='true' value='".$maksimalus."' />";

    // echo $maksimalus;
    // 3 budas
} else {
    echo "Kazkas negerai, kintamieji tusti arba neegzistuoja";
}

?>