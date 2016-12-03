<!DOCTYPE html>

<html lang="no">

<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="css/style.css">

<head>
    <title>Avganger</title>
    <script src="js/hendelser.js"></script>
    <script src="js/validering.js"></script>
</head>

<body>
    <div class="tooltip">
    <form method="post" onSubmit="return validering()">
        Avganger <input type="text" id="flyplasskode" name="flyplasskode" onfocus="farge(this)" onblur="ikkefarge(this)" onmouseover="musover(this)" onmouseout="musut(this)" onKeyUp="vis(this.value)" />
        <span class="tooltiptext">Skriv inn flyplasskode her, skal bestå av tre store bokstaver</span>
        </div>
        </br></br>
        <input type="submit" value="Fortsett" id="fortsett" name="fortsett"/>
        <input type="reset" value="Nullstill" id="nullstill" name="nullstill" onClick="fjernMelding()"/>
    </form>
    </br>

    <div id="melding1"></div>
    <div id="melding"></div>

    <?php
/*
    if (isset($_POST["fortsett"])) {
        $avganger=$_POST["avganger"];
        $avganger=trim($avganger); /*trim fjerner mellomrom først og sist i tekst strengen*/
/*        $filnavn="D:\\Sites//home.hbv.no/phptemp/web-prg10v06/flyplass.txt";
        $filoperasjon="r";
        $fil=fopen($filnavn, $filoperasjon);
        while($linje=fgets($fil)) {
            if ($linje !="") {
                $del = explode("  ", $linje);
                $avganger = trim(strtoupper($del[0]));
                if($avganger == $avganger) {
                    $flyplass = trim(strtoupper($del[1]));
                    print("Avganger avganger flyplass $flyplass");
                }
            }
        }
        fclose($fil);

    }
*/
    if (isset($_POST["fortsett"])) {
        print("<table>");
        $avganger=$_POST["avganger"];
        $avganger=trim($avganger); /*trim fjerner mellomrom først og sist i tekst strengen*/
        $filnavn="D:\\Sites//home.hbv.no/phptemp/web-prg10v06/flygning.txt";
        $filoperasjon="r";
        $fil=fopen($filnavn, $filoperasjon);
        while($linje=fgets($fil)) {
            if ($linje !="") {
                $del=explode("  ", $linje);
                $avganger=trim(strtoupper($del[1]));
                if($avganger==$avganger) {
                    $flightnr=trim(strtoupper($del[0]));
                    $ankomst=trim(strtoupper($del[2]));
                    $dato=trim(strtoupper($del[3]));
                    print("<tr><td>$ankomst</td><td>$flightnr</td><td>$dato</td></tr>");
                }
            }
        }
        fclose($fil);
        print("</table>");
    }

    ?>
</body>
</html>
