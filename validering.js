function fjernMelding()
{
	document.getElementById("melding1").innerHTML="";
}


function validering1() {

	var flyplasskode=("flyplasskode");
	var tegn1, tegn2, tegn3;
	var lovligFlyplasskode=true;

	if(!flyplasskode)
	{
		lovligFlyplasskode=false;
		document.write("Flyplasskode er ikke fylt ut");
	}

	else if(flyplasskode.length !=3)
	{
		lovligFlyplasskode=false;
		document.write("Flyplasskode skal bestå av 3 store bokstaver");
	}

	else
	{
		tegn1=flyplasskode[0]; /*tegn1=flyplasskode.substr(0,1);*/
		tegn2=flyplasskode[1]; /*tegn2=flyplasskode.substr(1,1);*/
		tegn3=flyplasskode[2]; /*tegn2=flyplasskode.substr(2,1);*/
	}

	if (tegn1 < "A" || tegn1 > "Z" || tegn2 < "A" || tegn2 > "Z" || tegn3 < "A" || tegn3 > "Z")
	{
		lovligFlyplasskode=false;
		document.write("Flyplasskode skal bestå av 3 store bokstaver");
	}

	if(lovligFlyplasskode)
	{
		document.write("Flyplasskode er korrekt fylt ut");
	}


	else
	{
        document.getElementById("melding1").style.color = "red";
        document.getElementById("melding1").innerHTML = feilmelding;
        return false;
    }
}
