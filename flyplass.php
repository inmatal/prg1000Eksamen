<!DOCTYPE html>

<html lang="no">

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">



<head>
<title>Registrer Flyplass</title>

<script src="js/hendelser2.js"></script>
<script src="js/validering.js"></script>

</head>

<body>



<form method="post" onSubmit="return validering()">
<div class="tooltip">
Flyplasskode <input type="text" id="flyplasskode" name="flyplasskode" onfocus="farge(this)" onblur="ikkefarge(this)" onKeyUp="vis(this.value)" />
<span class="tooltiptext">Skriv inn flyplass her</span>
</div>
<br>
<div class="tooltip">
Flyplassnavn <input type="text" id="flyplassnavn" name="flyplassnavn" onfocus="farge(this)" onblur="ikkefarge(this)"/>
<span class="tooltiptext">Skriv inn flyplass her</span>
</div>
<br>
<input type="submit" value="Fortsett" id="fortsett" name="fortsett" "/>
<input type="reset" value="Nullstill" id="nullstill" name="nullstill" "/>

</form>


</br>


<?php

@$fortsett=$_POST ["fortsett"];

if ($fortsett) {
    $flyplasskode=$_POST ["flyplasskode"];
    $flyplassnavn=$_POST["flyplassnavn"];

    if (!$flyplasskode || !$flyplassnavn) {
        print("Begge feltene må fylles ut");
    } else {
        $filnavn="D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v06/flyplass.txt";
        $filoperasjon="a";

        $fil=fopen($filnavn, $filoperasjon);

        $linje=$flyplasskode."  ".$flyplassnavn."\n";

        fwrite($fil, $linje);

        print("$flyplasskode $flyplassnavn er registrert");

        fclose($fil);
    }
}
?>
<div id="melding1"></div>
<div id="melding"></div>

</body>
</html>
