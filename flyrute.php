<?php
    $INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/web-prg10v06/inc/"; //legg inn root related path
    $title = "Eksamen | Registrer Flyrute"; // use "..." max 60 charaters
    $description = NULL;  // use "..." max 160 characters
?>
<!--THis is the required php for a fragmented html page to run included files-->

<?php require($INC_DIR. "header.php");?>
<!--START unique page content-->
    <form method="post" onSubmit="return validering1()">
        <div class="tooltip">
            Avgang <input type="text" id="avgang" name="avgang" onfocus="farge(this)" onblur="ikkefarge(this)" onKeyUp="vis(this.value)"/>
            <span class="tooltiptext">Skriv inn flyplasskode her, skal bestå av tre store bokstaver</span>
        </div>
        <br>
        <div class="tooltip">
            Ankomst <input type="text" id="ankomst" name="ankomst" onfocus="farge(this)" onblur="ikkefarge(this)"/>
            <span class="tooltiptext">Skriv inn flyplasskode her, skal bestå av tre store bokstaver</span>
        </div>
        <br>
        <input type="submit" value="Fortsett" id="fortsett" name="fortsett"/>
        <input type="reset" value="Nullstill" id="nullstill" name="nullstill" onClick="fjernMelding()"/>
    </form>
    </br>


    <?php
        if (isset($_POST['fortsett'])) {
            $avgang = $_POST["avgang"];
            $ankomst = $_POST ["ankomst"];

            if (!$ankomst || !$avgang) {
                print("Begge feltene må fylles ut");
            } else {
                $errorMessage = "";
                $filnavn="D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v06/flyplass.txt";
                $filoperasjon="r"; /*read=lese avganger fil*/
                $fileContents = file_get_contents($filnavn);
                $fil=fopen($filnavn, $filoperasjon); /*Åpne*/
                $lines = explode("\n", $fileContents);

                while ($linje = fgets($fil)){
                    if ($linje !="") {
                      $del = explode("  ", $linje);
                      $flyplasskode = $del[0];
                      $flyplassnavn = $del[1];
                    }

                    if ($ankomst != $flyplasskode) {
                        print ("Flyplasskoden eksisterer ikke!");
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

                fclose($fil);
            }
        }
    ?>
    <div id="melding1"></div>
    <div id="melding"></div>
<!--END unique page content-->
<?php require($INC_DIR. "footer.php");?>
