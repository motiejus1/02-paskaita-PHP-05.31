<?php 

$pirmas = $_POST["skaicius1"];
$antras = $_POST["skaicius2"];
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


?>