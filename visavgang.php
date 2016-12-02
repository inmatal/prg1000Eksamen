<!DOCTYPE html>

<html lang="no">

<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="css/style.css">

<head>
<title>avganger</title>
<script src="js/hendelser.js"></script>
<script src="js/validering.js"></script>
</head>

<body><center>

<div id="nav">





<form method="post" onSubmit="return validering2()">

Avganger <input type="text" id="avganger" name="avganger" onfocus="farge(this)" onblur="ikkefarge(this)" onmouseover="musover(this)" onmouseout="musut(this)" onKeyUp="vis(this.value)" required/>
</br></br>
<input type="submit" value="Søk" id="fortsett" name="fortsett" onClick="fjernMelding2()"/>
<input type="reset" value="Nullstill" id="nullstill" name="nullstill" onClick="fjernMelding()"/>


</form>

</br>



<?php

@$fortsett=$_POST ["fortsett"];
if ($fortsett)
{

$avganger=$_POST["avganger"];
$avganger=trim($avganger); /*trim fjerner mellomrom først og sist i tekst strengen*/

$filnavn="D:\\Sites//home.hbv.no/phptemp/web-prg10v06/flygning.txt";
$filoperasjon="r";

$fil=fopen($filnavn, $filoperasjon);


while($linje=fgets($fil))

{


if ($linje !="")

{


$del=explode("  ", $linje);
$sokeord=trim($del[1]);

if($sokeord==$avganger)
{

$flightnr=trim($del[0]);
$fra=trim($del[1]);
$til=trim($del[2]);
$dato=trim($del[3]);

print("Brukernavn: $ </br> Navn: $fornavn $etternavn </br> Klasse: $klasskode <br><br>");

}


}

}

fclose($fil);
}

?>

<div id="melding2"></div>
<div id="melding1"></div>
<div id="melding"></div>



</body></center>
</html>
