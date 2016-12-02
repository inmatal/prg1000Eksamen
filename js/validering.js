function validering() {

    var flyplasskode = document.getElementById("flyplasskode").value;
    var tegn1, tegn2, tegn3;
    var lovligflyplasskode=true;
    if (!flyplasskode)
{
  lovligflyplasskode=false
  document.write ("flyplasskode er ikke fylt ut")
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
