<!DOCTYPE html>

<html lang="no">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Registrer Flyrute</title>
        <script src="hendelser.js"></script>
        <script src="validering.js"></script>
    </head>
    <body>
        <form method="post" onSubmit="return validering2()">
            <div class="tooltip">
                Fra flyplass <input type="text" id="fra" name="fra" onfocus="farge(this)" onblur="ikkefarge(this)"onmouseover="musover(this)" onmouseout="musut(this)" onKeyUp="vis(this.value)"/>
                <span class="tooltiptext">Skriv inn flyplass her</span>
            </div>
            <br>
            <div class="tooltip">
                Til flyplass <input type="text" id="til" name="til" onfocus="farge(this)" onblur="ikkefarge(this)" onmouseover="musover(this)" onmouseout="musut(this)"/>
                <span class="tooltiptext">Skriv inn flyplass her</span>
            </div>
            <br>
            <input type="submit" value="Fortsett" id="fortsett" name="fortsett" onClick="fjernMelding1()"/>
            <input type="reset" value="Nullstill" id="nullstill" name="nullstill" onClick="fjernMelding()"/>
        </form>
    </br>

    <?php
    @$fortsett=$_POST ["fortsett"];

    if ($fortsett) {
        $til=$_POST ["til"];
        $fra=$_POST["fra"];
        if (!$til || !$fra) {
            print("Begge feltene må fylles ut");
        } else {
            $filnavn="D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v06/flyrute.txt";
            $filoperasjon="a";
            $fil=fopen($filnavn, $filoperasjon);
            $linje=$til."  ".$fra."\n";
            fwrite($fil, $linje);
            print("$til $fra er registrert");
            fclose($fil);
        }
    }
        ?>

        <div id="melding1"></div>
        <div id="melding"></div>
    </body>
</html>
