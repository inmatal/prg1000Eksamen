<?php
  $INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/web-prg10v06/prg1000Eksamen/inc"; //legg inn root related path
  $title = "Eksamen | Vis Flygninger"; // use "..." max 60 charaters
  $description = NULL;  // use "..." max 160 characters
?>
<!--THis is the required php for a fragmented html page to run included files-->

<?php require($INC_DIR. "header.php");?>
<!--START unique page content-->
    <?php
        $filnavn      = "D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v06/flygning.txt";
        $filoperasjon = "r";
        print("Flygninger som er registret: <br/><br/>");
        $fil = fopen($filnavn, $filoperasjon);

        print("<table>");
        while ($linje = fgets($fil)) {
            if ($linje != "") {
                $del      = explode("  ", $linje);
                $flightnr = $del[0];
                $avganger = $del[1];
                $til      = $del[2];
                $dato     = $del[3];
                print("<tr><td>$flightnr</td> <td>$avganger</td> <td>$til</td><td>$dato</td></tr>");
            }
        }
        fclose($fil);
        print("</table>");
    ?>
<!--END unique page content-->
<?php require($INC_DIR. "footer.php");?>
