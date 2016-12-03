: function validering() {
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

    var fra = document.getElementById("fra").value;
    var tegn1,
        tegn2,
        tegn3;
    var lovligfra = true;

    var feilmelding = "";

    var regexToUse = /^[a-zA-Z]{3}$/;

    if (!regexToUse.test(fra)) {
        lovligfra = false;
        feilmelding = feilmelding + "Fra er ikke fylt ut riktig<br />";
    }

    if (lovligfra) {
        return true;
        document.getElementById("melding1").innerHTML = "Alt er riktig fylt ut";
    } else {
        document.getElementById("melding1").style.color = "red";
        document.getElementById("melding1").innerHTML = feilmelding;
        return false;
    }

    if (fra) {
        document.write("Fra er korrekt fylt ut ")
    }

    var til = document.getElementById("til").value;
    var tegn1,
        tegn2,
        tegn3;
    var lovligtil = true;

    var feilmelding = "";

    var regexToUse = /^[a-zA-Z]{3}$/;

    if (!regexToUse.test(til)) {
        lovligtil = false;
        feilmelding = feilmelding + "Til er ikke fylt ut riktig<br />";
    }

    if (lovligtil) {
        return true;
        document.getElementById("melding1").innerHTML = "Alt er riktig fylt ut";
    } else {
        document.getElementById("melding1").style.color = "red";
        document.getElementById("melding1").innerHTML = feilmelding;
        return false;
    }

    if (til) {
        document.write("Til er korrekt fylt ut ")
    }
}
