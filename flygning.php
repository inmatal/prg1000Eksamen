<!DOCTYPE html>

<html lang="no">

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/design.css">

<head>
<title>Registrer Flygning</title>
<script src="js/hendelser.js"></script>
<script src="js/validering.js"></script>

</head>

<body>


    <center><header>Eksamen</header></center>

  <div id="nav">
    <ul>
      <li><a href="index.html">Gruppe 6 </a> </li>
      <li><a href="flyplass.php">Registrere flyplass </a> </li>
        <li><a href="visflyplass.php">Vise flyplasser</a> </li>
          <li><a href="flyrute.php">Registrere flyrute </a> </li>
            <li><a href="visflyrute.php">Vise flyruter</a> </li>
              <li><a href="flygning.php">Registrere flygninger</a> </li>
                <li><a href="visflygninger.php">Vise flygninger</a> </li>
                  <li><a href="visavgang.php">Vise avganger</a> </li>
                    <li><a href="visankomster.php">Vise ankomster</a> </li>

    </ul>
  </div>













<form method="post" onSubmit="return validering1()">
<div class="tooltip">
Flightnr <input type="text" id="flightnr" name="flightnr" onfocus="farge(this)" onblur="ikkefarge(this)"/>
<span class="tooltiptext">Skriv inn flightnr her</span>
</div>
<br>
<div class="tooltip">
Fra <input type="text" id="avganger" name="avganger" onfocus="farge(this)" onblur="ikkefarge(this)"/>
<span class="tooltiptext">Skriv inn flyplasskode her, skal bestå av tre store bokstaver</span>
</div>
<br>
<div class="tooltip">
Til <input type="text" id="ankomst" name="ankomst" onfocus="farge(this)" onblur="ikkefarge(this)"/>
<span class="tooltiptext">Skriv inn flyplasskode her, skal bestå av tre store bokstaver</span>
</div>
<br>
<div class="tooltip">
Dato <input type="text" id="dato" name="dato" onfocus="farge(this)" onblur="ikkefarge(this)"/>
<span class="tooltiptext">Skriv inn dato her</span>
</div>
<br>
<input type="submit" value="Fortsett" id="fortsett" name="fortsett"/>
<input type="reset" value="Nullstill" id="nullstill" name="nullstill" onClick="fjernMelding()"/>

</form>

</br>


<?php

    $fortsett=$_POST ["fortsett"];
    if ($fortsett) {
        $flightnr=$_POST["flightnr"];
        $avganger=$_POST["avganger"];
        $ankomst= $_POST["ankomst"];
        $dato=$_POST["dato"];

        $lovligDato=true;

        if (!$flightnr) {
            print("Flightnr må fylles ut<br>");
        }

        if (!$avganger) {
            print("avganger må fylles ut<br>");
        }

        if (!$ankomst) {
            print("ankomst må fylles ut<br>");
        }

        if (!$dato)
  			{
  			$lovligDato=false;
  			print ("Dato må fylles ut<br>");
  			}

  			elseif (strlen($dato)!=10)
  			{
  				$lovligDato=false;
  				print("Dato skal bestå av 10 tegn<br>");
  			}
        else {
          $tegn1=substr($dato,0,1);
          $tegn2=substr($dato,1,1);
          $tegn3=substr($dato,2,1);
          $tegn4=substr($dato,3,1);
          $tegn5=substr($dato,4,1);
          $tegn6=substr($dato,5,1);
          $tegn7=substr($dato,6,1);
          $tegn8=substr($dato,7,1);
          $tegn9=substr($dato,8,1);
          $tegn10=substr($dato,9,1);


          if ($tegn1 <"0" || $tegn1 >"9" || $tegn2 <"0" || $tegn2 >"9" || $tegn3 !="-" || $tegn4 <"0" || $tegn4 >"9" || $tegn5 <"0" || $tegn5 >"9" ||
          $tegn6 !="-" || $tegn7 <"0" || $tegn7 >"9" || $tegn8 <"0" || $tegn8 >"9" || $tegn9 <"0" || $tegn9 >"9" || $tegn10 <"0" || $tegn10 >"9" )
          {
            $lovligDato=false;
            print ("Dato skal ha formatet 00-00-0000");
          }

        }




        if ($flightnr && $avganger && $ankomst && $dato && $lovligDato) {
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
<footer>
<h4>Laget av gruppe 6, som består av:</h4>
</footer>

</html>
