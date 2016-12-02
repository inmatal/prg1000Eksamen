function fjernMelding() {
    document.getElementById("melding1").innerHTML = "";
}

function validering() {
    var flightnr = document.getElementById("flightnr").value;
    var fra = document.getElementById("fra").value;
    var til = document.getElementById("til").value;
    var dato = document.getElementById("dato").value;

    var feilmelding = "";

    if (!flightnr) {
        feilmelding = feilmelding + "Flightnr er ikke fylt ut</br>";
    }

    if (!fra) {
        feilmelding = feilmelding + "Fra flyplass er ikke fylt ut</br>";
    }

    if (!til) {
        feilmelding = feilmelding + "Til flyplass er ikke fylt ut</br>";
    }

    if (!dato) {
        feilmelding = feilmelding + "Dato er ikke fylt ut</br>";
    }

    if (flightnr && fra && til && dato) {
        return true;
        document.getElementById("melding1").innerHTML = "Alt er riktig fylt ut";
    } else {
        document.getElementById("melding1").style.color = "red";
        document.getElementById("melding1").innerHTML = feilmelding;
        return false;
    }
}

function validering1() {

    var flyplasskode = document.getElementById("flyplasskode").value;
    var flyplassnavn = document.getElementById("flyplassnavn").value;

    var feilmelding = "";

    if (!flyplasskode) {
        feilmelding = feilmelding + "Flyplasskode er ikke fylt ut <br />";
    }

    if (flyplasskode.length>3){
            alert("Maks 3 tegn!")
            return false
        }else {
            return true
        }

    if (!flyplassnavn) {
        feilmelding = feilmelding + "Flyplassnavn er ikke fylt ut <br />";
    }

    if (flyplasskode && flyplassnavn) {
        return true;
        document.getElementById("melding1").innerHTML = "Alt er riktig fylt ut";
    } else {
        document.getElementById("melding1").style.color = "red";
        document.getElementById("melding1").innerHTML = feilmelding;
        return false;
    }
}

function validering2() {

    var fra = document.getElementById("fra").value;
    var til = document.getElementById("til").value;

    var feilmelding = "";

    if (!fra) {
        feilmelding = feilmelding + "Fra flyplass er ikke fylt ut <br />";
    }

    if (!til) {
        feilmelding = feilmelding + "Til flyplass er ikke fylt ut <br />";
    }

    if (fra && til) {
        return true;
        document.getElementById("melding1").innerHTML = "Alt er riktig fylt ut";
    } else {
        document.getElementById("melding1").style.color = "red";
        document.getElementById("melding1").innerHTML = feilmelding;
        return false;
    }
}


CARL CUT:
var flyplasskode=prompt("flyplasskode");
var tegn1, tegn2, tegn3;
var lovligflyplasskode=true;

if(!flyplasskode)
{
	lovligflyplasskode=false;
	document.write("Flyplasskode er ikke fylt ut");
}

else if(flyplasskode.length !=3)
{
	lovligflyplasskode=false;
	document.write("Flyplasskode skal bestå av kun 3 tegn");
}

else
{
	tegn1=flyplasskode[0]; /*tegn1=flyplasskode.substr(0,1);*/
	tegn2=flyplasskode[1]; /*tegn2=flyplasskode.substr(1,1);*/
	tegn3=flyplasskode[2]; /*tegn2=flyplasskode.substr(2,1);*/
}

if (tegn1 < "A" || tegn1 > "Z" || tegn2 < "A" || tegn2 > "Z" || tegn3 < "A" || tegn3 > "Z")
{
	lovligflyplasskode=false;
	document.write("Flyplasskode innholder ulovlige tegn");
}

if(lovligflyplasskode)
{
	document.write("Flyplasskode er korrekt fylt ut");
}


---------------------------------------------.JS
function validering() {

    var flyplasskode = document.getElementById("flyplasskode").value;
		var tegn1, tegn2, tegn3;
		var lovligflyplasskode=true;

if(!flyplasskode)
{
	lovligflyplasskode=false;
	document.write("Flyplasskode er ikke fylt ut");


else if(flyplasskode.length !=3)
{
	lovligflyplasskode=false;
	document.write("Flyplasskode skal bestå av kun 3 tegn");
}

else
{
	tegn1=flyplasskode[0]; /*tegn1=flyplasskode.substr(0,1);*/
	tegn2=flyplasskode[1]; /*tegn2=flyplasskode.substr(1,1);*/
	tegn3=flyplasskode[2]; /*tegn2=flyplasskode.substr(2,1);*/
}
}
if (tegn1 < "A" || tegn1 > "Z" || tegn2 < "A" || tegn2 > "Z" || tegn3 < "A" || tegn3 > "Z")
{
	lovligflyplasskode=false;
	document.write("Flyplasskode innholder ulovlige tegn");

}

if (lovligflyplasskode) {
		return true;
		document.getElementById("melding").innerHTML = "Alt er riktig fylt ut";
} else {
		document.getElementById("melding").style.color = "red";
		document.getElementById("melding").innerHTML = feilmelding;
		return false;
}
=======
    var flyplasskode = ("flyplasskode");
    var tegn1,
        tegn2,
        tegn3;
    var lovligflyplasskode = true;

    if (!flyplasskode) {
        lovligflyplasskode = false;
        document.write("Flyplasskode er ikke fylt ut");
    } else if (flyplasskode.length != 3) {
        lovligflyplasskode = false;
        document.write("Flyplasskode skal bestå av kun 3 tegn");
    } else {
        tegn1 = flyplasskode[0];/*tegn1=flyplasskode.substr(0,1);*/
        tegn2 = flyplasskode[1];/*tegn2=flyplasskode.substr(1,1);*/
        tegn3 = flyplasskode[2];/*tegn2=flyplasskode.substr(2,1);*/
    }

    if (tegn1 < "A" || tegn1 > "Z" || tegn2 < "A" || tegn2 > "Z" || tegn3 < "A" || tegn3 > "Z") {
        lovligflyplasskode = false;
        document.write("Flyplasskode innholder ulovlige tegn");
    }

    if (lovligflyplasskode) {
        document.write("Flyplasskode er korrekt fylt ut");
    }
>>>>>>> origin/master
}
