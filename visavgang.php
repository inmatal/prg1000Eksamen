<!DOCTYPE html>

<html lang="no">

<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="stil.css">

<head>
<title>Søk i klasse</title>
<script src="hendelser.js"></script>
<script src="validering.js"></script>
</head>

<body><center>

<div id="nav">


<ul>

<li><a href="index.html">Hjem</a></li>


<li><a href="klasse.php">Registrer Klassen</a></li>


<li><a href="visklasse.php">Vis Klasse</a></li>


<li><a href="student.php">Registrer Student</a></li>


<li><a href="visstudent.php">Vis Student</a></li>


<li><a href="sokklasse.php">Søk i Klasseliste</a></li>


<li><a href="tekstfiler.html">Tekstfiler</a></li>

</ul>

</div>


<form method="post" onSubmit="return validering2()">

Klassekode <input type="text" id="klassekode" name="klassekode" onfocus="farge(this)" onblur="ikkefarge(this)" onmouseover="musover(this)" onmouseout="musut(this)" onKeyUp="vis(this.value)" required/>
</br></br>
<input type="submit" value="Søk" id="fortsett" name="fortsett" onClick="fjernMelding2()"/>
<input type="reset" value="Nullstill" id="nullstill" name="nullstill" onClick="fjernMelding()"/>


</form>

</br>



<?php

@$fortsett=$_POST ["fortsett"];
if ($fortsett)
{

$klassekode=$_POST["klassekode"];
$klassekode=trim($klassekode); /*trim fjerner mellomrom først og sist i tekst strengen*/

$filnavn="D:\\Sites//home.hbv.no/phptemp/146541/student.txt";
$filoperasjon="r";

$fil=fopen($filnavn, $filoperasjon);


while($linje=fgets($fil))

{


if ($linje !="")

{


$del=explode("  ", $linje);
$sokeord=trim($del[3]);

if($sokeord==$klassekode)
{

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



</body></center>
</html>
