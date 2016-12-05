
<!DOCTYPE html>

<html lang="no">

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/design.css">


<head>
<title>Registrer Flyplass</title>

<script src="js/hendelser2.js"></script>
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


<form method="post" onSubmit="return validering()">
<div class="tooltip">
Flyplasskode <input type="text" id="flyplasskode" name="flyplasskode" onfocus="farge(this)" onblur="ikkefarge(this)" onKeyUp="vis(this.value)" />
<<<<<<< HEAD
<span class="tooltiptext">Skriv inn flyplasskode her, skal bestï¿½ av tre store bokstaver</span>
=======
<span class="tooltiptext">Skriv inn flyplasskode her, skal bestå av tre store bokstaver</span>
>>>>>>> origin/master
</div>
<br>
<div class="tooltip">
Flyplassnavn <input type="text" id="flyplassnavn" name="flyplassnavn" onfocus="farge(this)" onblur="ikkefarge(this)"/>
<span class="tooltiptext">Skriv inn flyplassnavn her</span>
</div>
<br>
<input type="submit" value="Fortsett" id="fortsett" name="fortsett"/>
<input type="reset" value="Nullstill" id="nullstill" name="nullstill" onClick="fjernMelding()"/>

</form>
<?php
<<<<<<< HEAD
@$fortsett = $_POST['fortsett'];
=======

@$fortsett=$_POST ["fortsett"];

>>>>>>> origin/master
if ($fortsett) {
    $flyplasskode=$_POST ["flyplasskode"];
    $flyplassnavn=$_POST["flyplassnavn"];

    if (!$flyplasskode || !$flyplassnavn) {
<<<<<<< HEAD
        print("Begge feltene mÃ¥ fylles ut");
    } else {
      $errorMessage = "";
        $filnavn = "D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v06/flyplass.txt";
        $filoperasjon = "a+";
        $fil = fopen($filnavn, $filoperasjon);
        $fileContents = file_get_contents($filnavn);
=======
        print("Begge feltene må fylles ut");
    } else {
      $errorMessage = "";
        $filnavn="D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v06/flyplass.txt";
        $filoperasjon="a";

        $fileContents = file_get_contents($filnavn);
        $fil=fopen($filnavn, $filoperasjon);
>>>>>>> origin/master
        $lines = explode("\n", $fileContents);

        $existsAlready = false;
        foreach ($lines as $line) {
          $splitLine = explode(" ", $line);
            if ($splitLine[0] === $flyplasskode) {
                $errorMessage = $flyplasskode."Flyplasskoden eksisterer!";
                break;
            }
        }
<<<<<<< HEAD

        if ($errorMessage != "") {
          print($errorMessage);
        } else {
          $linje = $flyplasskode."  ".$flyplassnavn."\n";
          fwrite($fil, $linje);
          print("$flyplasskode $flyplassnavn er registrert");
        }
        fclose($fil);
    }
}

=======
        
        if (count($errorMessage) > 0) {
          print($errorMessage);
        } else {
          $linje=$flyplasskode."  ".$flyplassnavn."\n";
          fwrite($fil, $linje);
          print("$flyplasskode $flyplassnavn er registrert");
          fclose($fil);
        }
    }
}
>>>>>>> origin/master

?>





</br>

<div id="melding1"></div>
<div id="melding"></div>

<footer>
<<<<<<< HEAD
<h4>Laget av gruppe 6, som bestï¿½r av:</h4>
=======
<h4>Laget av gruppe 6, som består av:</h4>
>>>>>>> origin/master
</footer>

</body>
</html>
