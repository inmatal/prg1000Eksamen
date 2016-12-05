<?php
  $INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/web-prg10v06/prg1000Eksamen/inc"; //legg inn root related path
  $title = "Eksamen | Vis Flyrute"; // use "..." max 60 charaters
  $description = NULL;  // use "..." max 160 characters
?>
<!--THis is the required php for a fragmented html page to run included files-->

<?php require($INC_DIR. "header.php");?>
<!--START unique page content-->
    <?php
        @$fortsett=$_POST ["fortsett"];
        $filnavn="D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v06/flyrute.txt";
        $filoperasjon="r"; /*read=lese avganger fil*/
        print("Flyruter som er registret: <br/><br/>");
        $fil=fopen($filnavn, $filoperasjon); /*Åpne*/
        print("<table>");
        while ($linje= fgets($fil)) {
            if ($linje !="") {
                $del=explode("  ", $linje);
                $ankomst=$del[0];
                $avganger=$del[1];
                print("<tr><td>$ankomst</td><td>$avganger</td></tr>");
            }
        }
        fclose($fil);
        print("</table>");
    ?>
<!--END unique page content-->
<?php require($INC_DIR. "footer.php");?>
