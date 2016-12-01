<!DOCTYPE html>

<html lang="no">

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">


<head>
<title>Registrer Flygning</title>
<script src="hendelser.js"></script>
<script src="validering.js"></script>

</head>

<body>



<form method="post" onSubmit="return validering()">
<div class="tooltip">
Flightnr <input type="text" id="flightnr" name="flightnr" onfocus="farge(this)" onblur="ikkefarge(this)" onmouseover="musover(this)" onmouseout="musut(this)"/>
<span class="tooltiptext">Skriv inn flyplass her</span>
</div>
<br>
<div class="tooltip">
Fra flyplass <input type="text" id="fra" name="fra" onfocus="farge(this)" onblur="ikkefarge(this)" onmouseover="musover(this)" onmouseout="musut(this)"/>
<span class="tooltiptext">Skriv inn flyplass her</span>
</div>
<br>
<div class="tooltip">
Til flyplass <input type="text" id="til" name="til" onfocus="farge(this)" onblur="ikkefarge(this)" onmouseover="musover(this)" onmouseout="musut(this)"/>
<span class="tooltiptext">Skriv inn flyplass her</span>
</div>
<br>
<div class="tooltip">
Dato <input type="text" id="dato" name="dato" onfocus="farge(this)" onblur="ikkefarge(this)" onmouseover="musover(this)" onmouseout="musut(this)" onKeyUp="vis(this.value)"/>
<span class="tooltiptext">Skriv inn flyplass her</span>
</div>
<br>
<input type="submit" value="Fortsett" id="fortsett" name="fortsett" onClick="fjernMelding1()"/>
<input type="reset" value="Nullstill" id="nullstill" name="nullstill" onClick="fjernMelding()"/>

</form>

</br>


<?php

	@$fortsett=$_POST ["fortsett"];
	if ($fortsett)
	{
	    $flightnr=$_POST["flightnr"];
	    $fra=$_POST["fra"];
	    $til= $_POST["til"];
	    $dato=$_POST["dato"];

	    if (!$flightnr)
	        {
	        print ("Flightnr må fylles ut<br>");
	        }

		if (!$fra)
			{
			print ("Fra må fylles ut<br>");
			}

		if (!$til)
			{
			print ("Til må fylles ut<br>");
			}

		if (!$dato)
			{
			print ("Dato må fylles ut<br>");
			}




	    if ($flightnr && $fra && $til && $dato)
	    {
	    $filnavn="D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v06/flygning.txt";
	    $filoperasjon="a";


	    $fil= fopen ($filnavn, $filoperasjon);
	    $linje = $flightnr ."  ". $fra ."  ". $til."  ". $dato.    "\n";


	    fwrite ($fil, $linje) ;


	    print ("$flightnr $fra $til $dato er nå registrert");

		fclose ($fil);
	    }
		}
	    ?>
<div id="melding"></div>
<div id="melding1"></div>
<div id="melding2"></div>

</body>
</html>
