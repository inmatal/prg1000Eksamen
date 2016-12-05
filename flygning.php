<?php
  $INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/web-prg10v06/inc/"; //legg inn root related path
  $title = "Eksamen | Registrer Flygning"; // use "..." max 60 charaters
  $description = NULL;  // use "..." max 160 characters
?>
<!--THis is the required php for a fragmented html page to run included files-->

<?php require($INC_DIR. "header.php");?>
<!--START unique page content-->
    <form method="post" onSubmit="return validering1()">
        <div class="tooltip">
            Flightnr <input type="text" id="flightnr" name="flightnr" onfocus="farge(this)" onblur="ikkefarge(this)"/>
            <span class="tooltiptext">Skriv inn flightnr her</span>
        </div>
        <br>
        <div class="tooltip">
            Fra <input type="text" id="avganger" name="avganger" onfocus="farge(this)" onblur="ikkefarge(this)"/>
            <span class="tooltiptext">Skriv inn flightnr her, skal bestå av tre store bokstaver</span>
        </div>
        <br>
        <div class="tooltip">
            Til <input type="text" id="ankomst" name="ankomst" onfocus="farge(this)" onblur="ikkefarge(this)"/>
            <span class="tooltiptext">Skriv inn flightnr her, skal bestå av tre store bokstaver</span>
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
        if (isset ($_POST['fortsett'])) {
            $flightnr=$_POST["flightnr"];
            $avganger=$_POST["avganger"];
            $ankomst= $_POST["ankomst"];
            $dato=$_POST["dato"];
            if (!$flightnr) {
                print("Flightnr må fylles ut<br>");
            } elseif (!$avganger) {
                print("avganger må fylles ut<br>");
            } elseif (!$ankomst) {
                print("ankomst må fylles ut<br>");
            } elseif (!$dato) {
                print("Dato må fylles ut<br>");
            }

            $date_format = 'Y-m-d';
            $input = $dato;
            $input = trim($input);
            $time = strtotime($input);
            $is_valid = date($date_format, $time) == $input;

            if (!$is_valid==$input) {
                print ("Dato er ikke gyldig");
            } elseif ($is_valid == $input) {
                $errorMessage = "";
                $filnavn="D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v06/flygning.txt";
                $filoperasjon="a+";
                $fil=fopen($filnavn, $filoperasjon);
                $fileContents = file_get_contents($filnavn);
                $lines = explode("\n", $fileContents);

                $existsAlready = false;
                foreach ($lines as $line) {
                    $splitLine = explode(" ", $line);
                    if ($splitLine[0] === $flightnr) {
                        $errorMessage = $flightnr."Flightnrn eksisterer!";
                        break;
                    }
                }

                if ($errorMessage != "") {
                    print($errorMessage);
                } else {
                    $linje = $flightnr."  ".$avganger."  ".$ankomst."  ".$dato."\n";
                    fwrite($fil, $linje) ;
                    print("$flightnr $avganger $ankomst $dato er nå registrert");
                }
                fclose($fil);
            }
        }
    ?>
    <div id="melding1"></div>
    <div id="melding"></div>
<!--END unique page content-->
<?php require($INC_DIR. "footer.php");?>
