<!DOCTYPE html>

<html lang="no">

<meta charset="UTF-8">

<head>
<title>Vis flygninger</title>
</head>

<body>


	  <center><header>Eksamen</header></center>

	<div id="nav">
	  <ul>
	    <li><a href="index.html">Gruppe 6 </a> </li>
	    <li><a href="flyplass.php">Registrere flyplass </a> </li>
	      <li><a href="visflyplass.php">Vise flyplasser</a> </li>
	        <li><a href="flyrute.php">Registrere flyrute </a> </li>
	          <li><a href="visflyrute.php">Vise flyruter</a> </li>
	            <li><a href="flygning.php">Registrere flygninger</a> </li>
	              <li><a href="visflygninger.php">Vise flygninger</a> </li>
	                <li><a href="visavgang.php">Vise avganger</a> </li>
	                  <li><a href="visankomster.php">Vise ankomster</a> </li>

	  </ul>
	</div>



<form method="POST">

	<h4>Trykk fortsett for å se flygninger </br></h4>
	<input type="submit" value="Fortsett" id="fortsett" name="fortsett"/>
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
            $avganger      = $del[1];
            $til      = $del[2];
            $dato     = $del[3];

            print("<tr><td>$flightnr</td> <td>$avganger</td> <td>$til</td> <td>$dato</td></tr>");
        }
    }

    fclose($fil);
}
print("</table>");
?>


</body>
<footer>
<h4>Laget av gruppe 6, som består av:</h4>
</footer>
</html>
