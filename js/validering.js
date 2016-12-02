function validering() {

    var flyplasskode = document.getElementById("flyplasskode").value;
    var tegn1, tegn2, tegn3;
    var lovligflyplasskode=true;

    var feilmelding = "";


        if (!flyplasskode) {
            feilmelding = feilmelding + "Klassenavn er ikke fylt ut <br />";
        }
        if (!flyplasskode) {
            feilmelding = feilmelding + "flyplasskode er ikke fylt ut <br />";
        }


        if (flyplasskode) {
            return true;
            document.getElementById("melding1").innerHTML = "Alt er riktig fylt ut";
        } else {
            document.getElementById("melding1").style.color = "red";
            document.getElementById("melding1").innerHTML = feilmelding;
            return false;
        }
}













































else if (flyplasskode.length !=3)
{
  lovligflyplasskode=false;
  document.write("flyplasskode består ikke av 3 tegn")
}

else
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
    lovligflyplasskode=false;
    document.write("flyplasskode inneholder ulovlig tegn")
  }
}
if (lovligflyplasskode)
{
  document.write("flyplasskode er korrekt fylt ut ")
}
