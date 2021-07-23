<?php 

//tikrinam ar kintamieji egzistuoja ir yra netusti +
//kintamuju pasiemimas pagal $_GET arba $_POST
//atliekami veiksmai
//isvedamas rezultatas

if(isset($_GET["krastinea"]) && !empty($_GET["krastinea"]) && isset($_GET["krastineb"]) && !empty($_GET["krastineb"]) && isset($_GET["krastinec"]) && !empty($_GET["krastinec"]) ) {
    $rezultatoZinute = "";
    
    $krastinea = $_GET["krastinea"];
    $krastineb = $_GET["krastineb"];
    $krastinec = $_GET["krastinec"];

    if($krastinea + $krastineb > $krastinec && $krastinea + $krastinec > $krastineb && $krastinec + $krastineb > $krastinea ) {

        //Tikrinsim pagal krastines

        //Po to tikrinsim pagal kampus
        if($krastinec*$krastinec == $a*$a + $b*$b){
            echo "trikampis yra statusis";
        } else if($c*$c > $a*$a + $b*$b) {
            echo "trikampis yra bukasis";
        } else {
            echo "trikampis yra smailusis";
        }


    } else {
        $rezultatoZinute = "Trikampio sudaryti negalima";
    }



} else {
    echo "Kazkas negerai, tikrinkite kintamuosius";
}

?>