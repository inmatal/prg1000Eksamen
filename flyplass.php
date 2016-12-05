<?php
  $INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/web-prg10v06/inc/"; //legg inn root related path
  $title = "Eksamen | Registrer Flyplass"; // use "..." max 60 charaters
  $description = NULL;  // use "..." max 160 characters
?>
<!--THis is the required php for a fragmented html page to run included files-->

<?php require($INC_DIR. "header.php");?>
<!--START unique page content-->
    <form method="post" onSubmit="return validering()">
        <div class="tooltip">
            Flyplasskode <input type="text" id="flyplasskode" name="flyplasskode" onfocus="farge(this)" onblur="ikkefarge(this)" onKeyUp="vis(this.value)" />
            <span class="tooltiptext">Skriv inn flyplasskode her, skal best� av tre store bokstaver</span>
        </div>
        <br>
        <div class="tooltip">
            Flyplassnavn <input type="text" id="flyplassnavn" name="flyplassnavn" onfocus="farge(this)"     onblur="ikkefarge(this)"/>
            <span class="tooltiptext">Skriv inn flyplassnavn her</span>
        </div>
        <br>
        <input type="submit" value="Fortsett" id="fortsett" name="fortsett"/>
        <input type="reset" value="Nullstill" id="nullstill" name="nullstill"   onClick="fjernMelding()"/>
    </form>

    <?php
        @$fortsett=$_POST ["fortsett"];

        if ($fortsett) {
            $flyplasskode=$_POST ["flyplasskode"];
            $flyplassnavn=$_POST["flyplassnavn"];

            if (!$flyplasskode || !$flyplassnavn) {
                print("Begge feltene m� fylles ut");
            } else {
                $errorMessage = "";
                $filnavn="D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v06/flyplass.txt";
                $filoperasjon="a";

                $fileContents = file_get_contents($filnavn);
                $fil=fopen($filnavn, $filoperasjon);
                $lines = explode("\n", $fileContents);

                $existsAlready = false;
                foreach ($lines as $line) {
                    $splitLine = explode(" ", $line);
                    if ($splitLine[0] === $flyplasskode) {
                        $errorMessage = $flyplasskode."Flyplasskoden eksisterer!";
                        break;
                    }
                }

                if (count($errorMessage) > 0) {
                    print($errorMessage);
                } else {
                    $linje=$flyplasskode."  ".$flyplassnavn."\n";
                    fwrite($fil, $linje);
                    print("$flyplasskode $flyplassnavn er registrert");
                    fclose($fil);
                }
            }
        }
    ?>
    </br>
    <div id="melding1"></div>
    <div id="melding"></div>
<!--END unique page content-->
<?php require($INC_DIR. "footer.php");?>
