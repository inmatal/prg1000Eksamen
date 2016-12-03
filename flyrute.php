<!DOCTYPE html>

<html lang="no">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Registrer Flyrute</title>
        <script src="js/hendelser.js"></script>
        <script src="js/validering.js"></script>
    </head>
    <body>
        <form method="post" onSubmit="return validering1()">
            <div class="tooltip">
                Avganger <input type="text" id="avganger" name="avganger" onfocus="farge(this)" onblur="ikkefarge(this)" onKeyUp="vis(this.value)"/>
                <span class="tooltiptext">Skriv inn flyplasskode her, skal bestå av tre store bokstaver</span>
            </div>
            <br>
            <div class="tooltip">
                Ankomst <input type="text" id="ankomst" name="ankomst" onfocus="farge(this)" onblur="ikkefarge(this)"/>
                <span class="tooltiptext">Skriv inn flyplasskode her, skal bestå av tre store bokstaver</span>
            </div>
            <br>
            <input type="submit" value="Fortsett" id="fortsett" name="fortsett"/>
            <input type="reset" value="Nullsankomstl" id="nullsankomstl" name="nullsankomstl" onClick="fjernMelding()"/>
        </form>
    </br>

    <?php
    @$fortsett=$_POST ["fortsett"];

    if ($fortsett) {
        $ankomst=$_POST ["ankomst"];
        $avganger=$_POST["avganger"];
        if (!$ankomst || !$avganger) {
            print("Begge feltene må fylles ut");
        } else {
            $filnavn="D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v06/flyrute.txt";
            $filoperasjon="a";
            $fil=fopen($filnavn, $filoperasjon);
            $linje=$ankomst."  ".$avganger."\n";
            fwrite($fil, $linje);
            print("$ankomst $avganger er registrert");
            fclose($fil);
        }
    }
        ?>

        <div id="melding1"></div>
        <div id="melding"></div>
    </body>
</html>
