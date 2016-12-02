<!DOCTYPE=HTML>
<html lang="no">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
   <head>
     <Title>Søk</title>
	  <script src="js/hendelser.js"></script>
	  <script src="js/validering.js"></script>
   </head>
<body>

<form method="post" onsubmit="return validering()">
Flyplasskode <input type="text" id="flyplasskode" name="flyplasskode" onfocus="farge(this)" onblur="ikkefarge(this)" onmouseover="mouseover(this)" onmouseout="mouseout(this)" onKeyUp="vis(this.value)" /> <br />

<input type="submit" value="fortsett" id="fortsett" name="fortsett"/> <br />
<input type="reset" value="nullstill" id="nullstill" name="nullstill" onClick="fjernMelding()"/> <br />


</form>

<?php

@$fortsett=$_POST["fortsett"];

if ($fortsett)
{

$flyplasskode=$_POST["flyplasskode"];
$flyplasskode=trim($flyplasskode); /*trim fjerner mellomrom først og sist i tekst strengen*/
$flyplasskode=strtoupper($flyplasskode);
$lovligflyplasskode=true;

if(!$flyplasskode)
{
	/*print("flyplasskode ikke fylt ut");*/
	$lovligflyplasskode=false;
}

$filnavn="D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v06/flyplass.txt";
$filoperasjon="r";

$fil=fopen($filnavn, $filoperasjon);


while($linje=fgets($fil))

	{

	if ($linje !="")

	{

	$del=explode(" ", $linje);
	$sokeord=trim($del[2]);

	if($sokeord==$flyplasskode)
		{

		$flyplasskode=trim($del[0]);
		$flyplasskode=trim($del[1]);

		print("Avgang: $flyplasskode </br> Ankomst: $flyplasskode </br><br>");

		}


	}

}


fclose($fil);
}
?>
<div id="melding1"></div>
<div id="melding"></div>

</body>
</html>
