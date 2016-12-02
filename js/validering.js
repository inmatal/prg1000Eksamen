function fjernMelding()
{
	document.getElementById("melding1").innerHTML="";
}

function validering1() {

    	var flyplasskode = document.getElementById("flyplasskode").value;
			var flyplassnavn = document.getElementById("flyplassnavn").value;

			var tegn1, tegn2, tegn3;
			var lovligFlyplasskode=true;

			if(!flyplasskode)
			{
				lovligFlyplasskode=false;
				feilmelding=feilmelding+"Flyplasskode er ikke fylt ut</br>";
			}

			else if(flyplasskode.length !=3)
			{
				lovligFlyplasskode=false;
				feilmelding = feilmelding + "Flyplasskode skal bestå av 3 store bokstaver <br>";
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
				feilmelding = feilmelding + "Flyplasskode skal bestå av 3 store bokstaver <br>";
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
