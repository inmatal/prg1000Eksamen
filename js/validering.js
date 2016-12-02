function fjernMelding()
{
	document.getElementById("melding1").innerHTML="";
}



function validering()
{
	var flightnr = document.getElementById("flightnr").value;
	var fra = document.getElementById("fra").value;
	var til = document.getElementById("til").value;
	var dato = document.getElementById("dato").value;



	var feilmelding="";

	if (!flightnr)
	{
		feilmelding=feilmelding+"Flightnr er ikke fylt ut</br>";
	}

	if (!fra)
	{
		feilmelding=feilmelding+"Fra flyplass er ikke fylt ut</br>";
	}

	if (!til)
	{
		feilmelding=feilmelding+"Til flyplass er ikke fylt ut</br>";
	}

	if (!dato)
	{
		feilmelding=feilmelding+"Dato er ikke fylt ut</br>";
	}

	if (flightnr && fra && til && dato)
	{
        return true;
        document.getElementById("melding1").innerHTML = "Alt er riktig fylt ut";
    }

	else
	{
        document.getElementById("melding1").style.color = "red";
        document.getElementById("melding1").innerHTML = feilmelding;
        return false;
    }
}



function validering1() {

    var flyplasskode = document.getElementById("flyplasskode").value;
    var flyplassnavn = document.getElementById("flyplassnavn").value;




    var feilmelding = "";


    if (!flyplasskode)
	{
        feilmelding = feilmelding + "Flyplasskode er ikke fylt ut <br />";
    }

    if (!flyplassnavn)
	{
        feilmelding = feilmelding + "Flyplassnavn er ikke fylt ut <br />";
    }


    if (flyplasskode && flyplassnavn)
	{
        return true;
        document.getElementById("melding1").innerHTML = "Alt er riktig fylt ut";
    }

	else
	{
        document.getElementById("melding1").style.color = "red";
        document.getElementById("melding1").innerHTML = feilmelding;
        return false;
    }
}

function validering2() {

	var fra = document.getElementById("fra").value;
	var til = document.getElementById("til").value;




	var feilmelding = "";


	if (!fra)
{
			feilmelding = feilmelding + "Fra flyplass er ikke fylt ut <br />";
	}

	if (!til)
{
			feilmelding = feilmelding + "Til flyplass er ikke fylt ut <br />";
	}


	if (fra && til)
{
			return true;
			document.getElementById("melding1").innerHTML = "Alt er riktig fylt ut";
	}

else
{
			document.getElementById("melding1").style.color = "red";
			document.getElementById("melding1").innerHTML = feilmelding;
			return false;
	}
}
