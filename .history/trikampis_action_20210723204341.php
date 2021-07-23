
<style>
.zalia {
    background-color: green;
}   

.raudona {
    background-color: red;
}
</style>

<?php 

//tikrinam ar kintamieji egzistuoja ir yra netusti +
//kintamuju pasiemimas pagal $_GET arba $_POST
//atliekami veiksmai
//isvedamas rezultatas
$rezultatoZinute = "";
$rezultatoKlase = "";
if(isset($_GET["krastinea"]) && !empty($_GET["krastinea"]) && isset($_GET["krastineb"]) && !empty($_GET["krastineb"]) && isset($_GET["krastinec"]) && !empty($_GET["krastinec"]) ) {
    
    $rezultatoKlase = "zalia";

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
            $rezultatoZinute .= "<br>trikampis yra statusis";
            // $rezultatoZinute = $rezultatoZinute . "trikampis yra statusis";
        } else if($krastinec*$krastinec > $krastinea*$krastinea + $krastineb*$krastineb) {
            $rezultatoZinute .=  "trikampis yra bukasis";
        } else {
            $rezultatoZinute .= "trikampis yra smailusis";
        }


    } else {
        $rezultatoZinute = "Trikampio sudaryti negalima";
    }



} else {
    $rezultatoKlase = "raudona";
    $rezultatoZinute = "Kazkas negerai, tikrinkite kintamuosius";
}

?>

<div class="zinute <?php echo $rezultatoKlase ?>">
    <?php echo $rezultatoZinute; ?>
</div>