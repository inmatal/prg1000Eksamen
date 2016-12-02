<?php
$delfra=$_GET["fra"];
$filnavn="D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v06/flygning.txt";
$filoperasjon="r";
$fil= fopen($filnavn, $filoperasjon);
while ($linje=fgets($fil)) {
    if ($linje !="") {
        $del=explode("  ", $linje);
        $flightnr=$del[0];
        $fra=$del[1];
        $til=$del[2];
        $dato=$del[3];

        $startpos=stripos($fra, $delfra);
        if ($startpos!==false) {
            print("<tr><td>$flightnr $fra $til $dato </tr></td><br>");
        }
    }
}

fclose($fil);

?>
