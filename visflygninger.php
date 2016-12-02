<!DOCTYPE html>
test
<html lang="no">

<meta charset="UTF-8">

<head>
<title>Vis flygninger</title>
</head>

<body>

<form method="POST">

	<h4>Trykk fortsett for å se flygninger </br></h4>
	<input type="submit" value="Fortsett" id="fortsett" name="fortsett" onmouseover="musover(this)" onmouseout="musout(this)" />
	<br><br>
</form>

<?php

@$fortsett = $_POST["fortsett"];
if ($fortsett) {
    $filnavn      = "D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v06/flygning.txt";
    $filoperasjon = "r";

    print("Flygninger som er registret: <br/><br/>");

    $fil = fopen($filnavn, $filoperasjon);

    print("<table>");

    while ($linje = fgets($fil)) {
        if ($linje != "") {
            $del      = explode("  ", $linje);
            $flightnr = $del[0];
            $fra      = $del[1];
            $til      = $del[2];
            $dato     = $del[3];

            print("<tr><td>$flightnr</td> <td>$fra</td> <td>$til</td> <td>$dato</td></tr>");
        }
    }

    fclose($fil);
}
print("</table>");
?>


</body>
</html>
