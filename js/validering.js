function fjernMelding() {
    document.getElementById("melding1").innerHTML = "";
}

function fjernMelding1() {
    document.getElementById("melding1").innerHTML = "";
}

function validering1() {

    var flyplasskode = document.getElementById("flyplasskode").value;
    var tegn1, tegn2, tegn3;
    var lovligFlyplasskode=true;

    var feilmelding = "";

    if(!flyplasskode)
    {
    	lovligFlyplasskode=false;
    	feilmelding = feilmelding + "Flyplasskode er ikke fylt ut";
    }

    else if(flyplasskode.length !=3)
    {
    	lovligFlyplasskode=false;
    	feilmelding = feilmelding + "Flyplasskode skal bestå av kun 3 tegn";
    }

    else
    {
    	tegn1=flyplasskode[0];
    	tegn2=flyplasskode[1];
    	tegn3=flyplasskode[2];
    }

    if (tegn1 < "A" || tegn1 > "Z" || tegn2 < "A" || tegn2 > "Z" || tegn3 < "A" || tegn3 > "Z")
    {
    	lovligFlyplasskode=false;
    	feilmelding = feilmelding + "Flyplasskode innholder ulovlige tegn";
    }

    if(lovligFlyplasskode)
    {
    	feilmelding = feilmelding + "Flyplasskode er korrekt fylt ut";
    }

    if (flyplasskode) {
        return true;
        document.getElementById("melding1").innerHTML = "Alt er riktig fylt ut";
    }
    else {
        document.getElementById("melding1").style.color = "red";
        document.getElementById("melding1").innerHTML = feilmelding;
        return false;
    }

  }
