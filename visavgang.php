<?php
  $INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/web-prg10v06/prg1000Eksamen/inc"; //legg inn root related path
  $title = "Eksamen | Vis Ankomster"; //"..." max 60 charaters
  $description = NULL;  // use "..." max 160 characters
?>
<!--THis is the required php for a fragmented html page to run included files-->

<?php require($INC_DIR. "header.php");?>
<!--START unique page content-->
    <form method="post" onSubmit="return validering()">
        <div class="tooltip">
            Avganger <input type="text" id="flyplasskode" name="flyplasskode" onfocus="farge(this)" onblur="ikkefarge(this)" onKeyUp="vis(this.value)" />
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
        if (isset($_POST["fortsett"])) {
            if ($_POST['flyplasskode'] == ""){
                print("Det m&aring fylles ut flyplasskode");
            } else {
                print("<table>");
                print("<tr><th>Flightnr</th><th>Til</th><th>Avgangsdato</th></tr>");
                $sokeord=$_POST["flyplasskode"];
                $sokeord=trim(strtoupper($sokeord)); /*trim fjerner mellomrom først og sist itekst  strengen*/
                $filnavn="D:\\Sites//home.hbv.no/phptemp/web-prg10v06/flygning.txt";
                $filoperasjon="r";
                $fil=fopen($filnavn, $filoperasjon);
                while($linje=fgets($fil)) {
                    if ($linje !="") {
                        $del=explode("  ", $linje);
                        $avganger=trim(strtoupper($del[1]));
                        if($avganger==$sokeord) {
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
        }
    ?>
<!--END unique page content-->
<?php require($INC_DIR. "footer.php");?>
