<!DOCTYPE html>

<html lang="no">

<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/design.css">

<head>
    <title>Ankomster</title>
    <script src="js/hendelser2.js"></script>
    <script src="js/validering.js"></script>
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



    <div class="tooltip">
    <form method="post" onSubmit="return validering()">
        Ankomster <input type="text" id="flyplasskode" name="flyplasskode" onfocus="farge(this)" onblur="ikkefarge(this)" onKeyUp="vis(this.value)" />
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
                print("<tr><th>Flightnr</th><th>Fra</th><th>Ankomstdato</th></tr>");
                $sokeord=$_POST["flyplasskode"];
                $sokeord=trim(strtoupper($sokeord)); /*trim fjerner mellomrom først og sist i tekst    strengen*/
                $filnavn="D:\\Sites//home.hbv.no/phptemp/web-prg10v06/flygning.txt";
                $filoperasjon="r";
                $fil=fopen($filnavn, $filoperasjon);
                while($linje=fgets($fil)) {
                    if ($linje !="") {
                        $del=explode("  ", $linje);
                        $ankomst=trim(strtoupper($del[2]));
                        if($ankomst==$sokeord) {
                            $flightnr=trim(strtoupper($del[0]));
                            $avganger=trim(strtoupper($del[1]));
                            $dato=trim(strtoupper($del[3]));
                            print("<tr><td>$avganger</td><td>$flightnr</td><td>$dato</td></tr>");
                        }
                    }
                }
                fclose($fil);
                print("</table>");
            }
        }
    ?>
</body>

  <footer>
  <h4>Laget av gruppe 6, som består av:</h4>
  </footer>
</html>
