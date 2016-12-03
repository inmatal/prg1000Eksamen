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
      var fra = document.getElementById("fra").value;
      var til = document.getElementById("til").value;
      var tegn1,
          tegn2,
          tegn3;
      var lovligFra = true;

      var feilmelding = "";

      var regexToUse = /^[a-zA-Z]{3}$/;

      if (!regexToUse.test(fra)) {
          lovligFra = false;
          feilmelding = feilmelding + "Fra er ikke fylt ut riktig<br />";
      }
      if (!regexToUse.test(til)) {
          lovligFra = false;
          feilmelding = feilmelding + "Til er ikke fylt ut riktig<br />";
      }


      if (lovligFra) {
          return true;
          document.getElementById("melding1").innerHTML = "Alt er riktig fylt ut";
      } else {
          document.getElementById("melding1").style.color = "red";
          document.getElementById("melding1").innerHTML = feilmelding;
          return false;
      }

      if (fra) {
          document.write("Flyplasskode er korrekt fylt ut ")
      }
      if (til) {
          document.write("Flyplasskode er korrekt fylt ut ")
      }
    }

		function validering2() {
		    var avganger = document.getElementById("avganger").value;
		    var tegn1,
		        tegn2,
		        tegn3;
		    var lovligavganger = true;

		    var feilmelding = "";

		    var regexToUse = /^[a-zA-Z]{3}$/;

		    if (!regexToUse.test(avganger)) {
		        lovligavganger = false;
		        feilmelding = feilmelding + "Flyplasskode er ikke fylt ut riktig<br />";
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
		  }
