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

<form method="post" onsubmit="return validering2()">
Flyplasskode <input type="text" id="flyplasskode" name="flyplasskode" onfocus="farge(this)" onblur="ikkefarge(this)" onmouseover="mouseover(this)" onmouseout="mouseout(this)" onKeyUp="vis(this.value)" required/> <br />
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

else if(strlen($flyplasskode)!=3)
{
	/*print("flyplasskode består ikke av 3 tegn");*/
	$lovligflyplasskode=false;
}

else
{
	$tegn1=$flyplasskode[0];
	$tegn2=$flyplasskode[1];
	$tegn3=$flyplasskode[2];


	if($tegn1<"A" || $tegn1>"Z" || $tegn2<"A" || $tegn2>"Z" || $tegn3<"1" || $tegn3>"9")
	{
		/*print("her er det noe muffins");*/
		$lovligflyplasskode=false;
	}
}



$filnavn="D:\\Sites//home.hbv.no/phptemp/060929/student.txt";
$filoperasjon="r";

/*print ("<h2> Studenter </h2> </br>");*/

$fil=fopen($filnavn, $filoperasjon);


while($linje=fgets($fil))

	{

	if ($linje !="")

	{

	$del=explode(";", $linje);
	$sokeord=trim($del[3]);

	if($sokeord==$flyplasskode)
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

</body>
</html>
