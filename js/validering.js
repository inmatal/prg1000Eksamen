function validering() {

  var flyplasskode = document.getElementById("flyplasskode").value;


    var feilmelding = "";

if (flyplasskode.length !=3)
{
  feilmelding = feilmelding + "Flyplasskode er ikke fylt ut riktig <br />";
}
if
{

  tegn1=flyplasskode[0];
  tegn2=flyplasskode[1];
  tegn3=flyplasskode[2];

  /*måte 2:
  tegn=flyplasskode.substr(0,1);
  tegn=flyplasskode.substr(1,1);
  tegn=flyplasskode.substr(2,1);*/
  if (tegn1 < "A" || tegn1 > "Z" || tegn2 < "A" || tegn2 > "Z" || tegn3 < "0" || tegn3 > "9")
  {
    feilmelding = feilmelding + "Flyplasskode inneholder ulovlige tegn <br />";
  }
}

if (klassenavn && klassekode) {
    return true;
    document.getElementById("melding1").innerHTML = "Alt er riktig fylt ut";
} else {
    document.getElementById("melding1").style.color = "red";
    document.getElementById("melding1").innerHTML = feilmelding;
    return false;
}
