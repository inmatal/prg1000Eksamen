<!DOCTYPE html>

<html lang="no">

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">


<head>
<title>Registrer Flygning</title>
<script src="js/hendelser.js"></script>
<script src="js/validering.js"></script>

</head>

<body>



<form method="post" onSubmit="return validering1()">
<div class="tooltip">
Flightnr <input type="text" id="flightnr" name="flightnr" onfocus="farge(this)" onblur="ikkefarge(this)"/>
<span class="tooltiptext">Skriv inn flightnr her</span>
</div>
<br>
<div class="tooltip">
Avganger <input type="text" id="avganger" name="avganger" onfocus="farge(this)" onblur="ikkefarge(this)"/>
<span class="tooltiptext">Skriv inn flyplasskode her, skal bestå av tre store bokstaver</span>
</div>
<br>
<div class="tooltip">
Ankomst <input type="text" id="ankomst" name="ankomst" onfocus="farge(this)" onblur="ikkefarge(this)"/>
<span class="tooltiptext">Skriv inn flyplasskode her, skal bestå av tre store bokstaver</span>
</div>
<br>
<div class="tooltip">
Dato <input type="text" id="dato" name="dato" onfocus="farge(this)" onblur="ikkefarge(this)"/>
<span class="tooltiptext">Skriv inn dato her</span>
</div>
<br>
<input type="submit" value="Fortsett" id="fortsett" name="fortsett"/>
<input type="reset" value="Nullsankomstl" id="nullsankomstl" name="nullsankomstl" onClick="fjernMelding()"/>

</form>

</br>


<?php

    @$fortsett=$_POST ["fortsett"];
    if ($fortsett) {
        $flightnr=$_POST["flightnr"];
        $avganger=$_POST["avganger"];
        $ankomst= $_POST["ankomst"];
        $dato=$_POST["dato"];

        if (!$flightnr) {
            print("Flightnr må fylles ut<br>");
        }

        if (!$avganger) {
            print("avganger må fylles ut<br>");
        }

        if (!$ankomst) {
            print("ankomst må fylles ut<br>");
        }

        if (!$dato) {
            print("Dato må fylles ut<br>");
        }




        if ($flightnr && $avganger && $ankomst && $dato) {
            $filnavn="D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v06/flygning.txt";
            $filoperasjon="a";


            $fil= fopen($filnavn, $filoperasjon);
            $linje = $flightnr ."  ". $avganger ."  ". $ankomst."  ". $dato.    "\n";


            fwrite($fil, $linje) ;


            print("$flightnr $avganger $ankomst $dato er nå registrert");

            fclose($fil);
        }
    }
?>
<div id="melding1"></div>
<div id="melding"></div>

</body>
</html>
