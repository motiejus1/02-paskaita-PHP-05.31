<?php 

//tikrinam ar kintamieji egzistuoja ir yra netusti +
//kintamuju pasiemimas pagal $_GET arba $_POST
//atliekami veiksmai
//isvedamas rezultatas
$rezultatoZinute = "";

if(isset($_GET["krastinea"]) && !empty($_GET["krastinea"]) && isset($_GET["krastineb"]) && !empty($_GET["krastineb"]) && isset($_GET["krastinec"]) && !empty($_GET["krastinec"]) ) {
    
    $krastinea = $_GET["krastinea"];
    $krastineb = $_GET["krastineb"];
    $krastinec = $_GET["krastinec"];

    if($krastinea + $krastineb > $krastinec && $krastinea + $krastinec > $krastineb && $krastinec + $krastineb > $krastinea ) {

        //Tikrinsim pagal krastines
        if($krastinec == $krastineb && $krastinea == $krastineb && $krastinea == $krastinec ){
            $rezultatoZinute = "trikampis yra lygiakrastis";
        } else if($krastinec == $krastineb || $krastinea == $krastineb || $krastinea == $krastinec) {
            $rezultatoZinute = "trikampis yra lygiasonis";
        } else {
            $rezultatoZinute = "trikampis yra ivariakrastis";
        }
        //Po to tikrinsim pagal kampus
        if($krastinec*$krastinec == $krastinea*$krastinea + $krastineb*$krastineb){
            $rezultatoZinute = "trikampis yra statusis";
        } else if($krastinec*$krastinec > $krastinea*$krastinea + $krastineb*$krastineb) {
            $rezultatoZinute =  "trikampis yra bukasis";
        } else {
            $rezultatoZinute = "trikampis yra smailusis";
        }


    } else {
        $rezultatoZinute = "Trikampio sudaryti negalima";
    }



} else {
    echo "Kazkas negerai, tikrinkite kintamuosius";
}

?>

<div class="zinute">
    <?php echo $rezultatoZinute; ?>
</div>