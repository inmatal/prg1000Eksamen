function fjernMelding()
{
	document.getElementById("melding1").innerHTML="";
}

function validering() {
    var flyplasskode = document.getElementById("flyplasskode").value;
    var tegn1,
        tegn2,
        tegn3;
    var lovligflyplasskode = true;

    var feilmelding = "";

    var regexToUse = /^[a-zA-Z]{3}$/;

    if (!regexToUse.test(flyplasskode)) {
        lovligflyplasskode = false;
        feilmelding = feilmelding + "Flyplasskode er ikke fylt ut riktig<br />";
    }

    if (lovligflyplasskode) {
        return true;
        document.getElementById("melding1").innerHTML = "Alt er riktig fylt ut";
    } else {
        document.getElementById("melding1").style.color = "red";
        document.getElementById("melding1").innerHTML = feilmelding;
        return false;
    }

    if (flyplasskode) {
        document.write("Flyplasskode er korrekt fylt ut ")
    }
  }

  function validering1() {
      var avganger = document.getElementById("avganger").value;
      var ankomst = document.getElementById("ankomst").value;
      var tegn1,
          tegn2,
          tegn3;
      var lovligavganger = true;

      var feilmelding = "";

      var regexToUse = /^[a-zA-Z]{3}$/;

      if (!regexToUse.test(avganger)) {
          lovligavganger = false;
          feilmelding = feilmelding + "avganger er ikke fylt ut riktig<br />";
      }
      if (!regexToUse.test(ankomst)) {
          lovligavganger = false;
          feilmelding = feilmelding + "ankomst er ikke fylt ut riktig<br />";
      }


      if (lovligavganger) {
          return true;
          document.getElementById("melding1").innerHTML = "Alt er riktig fylt ut";
      } else {
          document.getElementById("melding1").style.color = "red";
          document.getElementById("melding1").innerHTML = feilmelding;
          return false;
      }

      if (avganger) {
          document.write("Flyplasskode er korrekt fylt ut ")
      }
      if (ankomst) {
          document.write("Flyplasskode er korrekt fylt ut ")
      }
    }
