<!DOCTYPE html>

<html lang="no">

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/design.css">

<head>
<title>Vis Flyplasser</title>
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




<form method="POST">

	<h4>Trykk fortsett for å se flyplasser </br></h4>
	<input type="submit" value="Fortsett" id="fortsett" name="fortsett"/>
	<br><br>
</form>


<?php

@$fortsett=$_POST ["fortsett"];
if ($fortsett) {
    $filnavn="D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v06/flyplass.txt";
    $filoperasjon="r"; /*read=lese avganger fil*/

print("Flyplasser som er registret: <br/><br/>");

    $fil=fopen($filnavn, $filoperasjon); /*Åpne*/

print("<table>");

    while ($linje= fgets($fil)) /*while taggen trenger ikke oppgitt antall repitisjoner, men det gjør for taggen. fgets leser hvert linje skift helt ankomst den ikke finner mer, da blir betingelsen usann og stopper*/


{

if ($linje !="") {
    $del=explode("  ", $linje);
    $flyplasskode=$del[0];
    $flyplassnavn=$del[1];

    print("<tr><td>$flyplasskode</td> <td>$flyplassnavn</td></tr>");
}

}
    fclose($fil);
}
print("</table>");
?>


<footer>
<h4>Laget av gruppe 6, som består av:</h4>
</footer>
</body>
</html>
