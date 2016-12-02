//////Farge i feltet///////

function farge(element) {
    element.style.background = "yellow";
}

function ikkefarge(element) {
    element.style.background = "white";
}

//////AJAX///////

function fjernMelding() {
    document.getElementById("melding").innerHTML = "";
}

function vis(flyplasskode) {
    var foresporsel = new XMLHttpRequest();
    foresporsel.onreadystatechange = function() {
        if (foresporsel.readyState == 4 && foresporsel.status == 200) {
            document.getElementById("melding").innerHTML = foresporsel.responseText;
        }
    }
    foresporsel.open("GET", "ajax.php?flyplasskode=" + flyplasskode);
    foresporsel.send();
}
