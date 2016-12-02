<!DOCTYPE=HTML>
<html lang="no">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="stil.css">
   <head>
     <Title>Søk</title>
	 <script src="hendelser.js"></script>
	  <script src="validering.js"></script>
   </head>
<body>

<form method="post" onsubmit="return validering2()">
Flyplass <input type="text" id="klassekode" name="klassekode" onfocus="farge(this)" onblur="ikkefarge(this)" onKeyUp="vis(this.value)" required/> <br>
<input type="submit" value="fortsett" id="fortsett" name="fortsett"/> <br />
<input type="reset" value="nullstill" id="nullstill" name="nullstill" onClick="fjernMelding()"/> <br />


</form>

<?php

@$fortsett=$_POST["fortsett"];

if ($fortsett) {
    $klassekode=$_POST["klassekode"];
    $klassekode=trim($klassekode); /*trim fjerner mellomrom først og sist i tekst strengen*/
$klassekode=strtoupper($klassekode);
    $lovligKlassekode=true;

    if (!$klassekode) {
        /*print("klassekode ikke fylt ut");*/
    $lovligKlassekode=false;
    } elseif (strlen($klassekode)!=3) {
        /*print("klassekode består ikke av 3 tegn");*/
    $lovligKlassekode=false;
    } else {
        $tegn1=$klassekode[0];
        $tegn2=$klassekode[1];
        $tegn3=$klassekode[2];


        if ($tegn1<"A" || $tegn1>"Z" || $tegn2<"A" || $tegn2>"Z" || $tegn3<"1" || $tegn3>"9") {
            /*print("her er det noe muffins");*/
        $lovligKlassekode=false;
        }
    }



    $filnavn="D:\\Sites//home.hbv.no/phptemp/060929/student.txt";
    $filoperasjon="r";

/*print ("<h2> Studenter </h2> </br>");*/

$fil=fopen($filnavn, $filoperasjon);


    while ($linje=fgets($fil)) {
        if ($linje !="") {
            $del=explode(";", $linje);
            $sokeord=trim($del[3]);

            if ($sokeord==$klassekode) {
                $brukernavn=trim($del[0]);
                $fornavn=trim($del[1]);
                $etternavn=trim($del[2]);
                $klasskode=trim($del[3]);

                print("Brukernavn: $brukernavn </br> Navn: $fornavn $etternavn </br> Klasse: $klasskode <br><br>");
            }
        }
    }


    fclose($fil);
}
?>
<div id="melding2"></div>
<div id="melding1"></div>
<div id="melding"></div>

</body>
</html>
