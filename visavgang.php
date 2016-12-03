<!DOCTYPE html>

<html lang="no">

<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="css/style.css">

<head>
    <title>avganger</title>
    <script src="js/hendelser2.js"></script>
    <script src="js/validering.js"></script>
</head>

<body>
    <form method="post" onSubmit="return validering2()">
        Avganger <input type="text" id="avganger" name="avganger" onfocus="farge(this)" onblur="ikkefarge(this)" onmouseover="musover(this)" onmouseout="musut(this)" onKeyUp="vis(this.value)" />
        </br></br>
        <input type="submit" value="Søk" id="fortsett" name="fortsett"/>
        <input type="reset" value="Nullsankomstl" id="nullsankomstl" name="nullsankomstl" onClick="fjernMelding()"/>
    </form>
    </br>

    <?php

    if (isset($_POST["fortsett"])) {
        $avganger=$_POST["avganger"];
        $avganger=trim($avganger); /*trim fjerner mellomrom først og sist i tekst strengen*/
        $filnavn="D:\\Sites//home.hbv.no/phptemp/web-prg10v06/flyplass.txt";
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
    if (isset($_POST["fortsett"])) {
        print("<table>");
        $avganger=$_POST["avganger"];
        $avganger=trim($avganger); /*trim fjerner mellomrom først og sist i tekst strengen*/
        $filnavn="D:\\Sites//home.hbv.no/phptemp/web-prg10v06/flygnin.txt";
        $filoperasjon="r";
        $fil=fopen($filnavn, $filoperasjon);
        while($linje=fgets($fil)) {
            if ($linje !="") {
                $del=explode("  ", $linje);
                $avganger=trim(strtoupper($del[1]);
                if($avganger==$avganger) {
                    $flightnr=trim(strtoupper($del[0]));
                    $ankomst=trim(strtoupper($del[2]));
                    $dato=trim(strtoupper($del[3]));
                    print("<tr><td>$ankomst</td><td>$filghtnr</td><td>$dato</td></tr>");
                }
            }
        }
        fclose($fil);
        print("</table>");
    }

    ?>

    <div id="melding2"></div>
    <div id="melding1"></div>
    <div id="melding"></div>
</body>
</html>
