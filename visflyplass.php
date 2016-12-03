<!DOCTYPE html>

<html lang="no">

<meta charset="UTF-8">

<head>
<title>Vis Flyplasser</title>
</head>

<body>

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

    while ($linje= fgets($fil)) /*while taggen trenger ikke oppgitt antall repitisjoner, men det gjør for taggen. fgets leser hvert linje skift helt til den ikke finner mer, da blir betingelsen usann og stopper*/


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

</body>
</html>
