<?php
$delflyplasskode=$_GET["flyplasskode"];
$filnavn="D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v06/flygning.txt";
$filoperasjon="r";
$fil= fopen($filnavn, $filoperasjon);

print ("<table>");

while ($linje=fgets($fil)) {
    if ($linje !="") {
        $del=explode("  ", $linje);
        $flightnr=$del[0];
        $avganger=$del[1];
        $til=$del[2];
        $dato=$del[3];

        $startpos=stripos($avganger, $delflyplasskode);
        if ($startpos!==false) {
            print("<tr><td>$avganger</td><td>$til</tr></td><br>");
        }
    }
}

print("</table>");
fclose($fil);
?>
