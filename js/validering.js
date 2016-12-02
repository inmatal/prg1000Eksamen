

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
