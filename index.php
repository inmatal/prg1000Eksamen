<?php
  $INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/web-prg10v06/prg1000Eksamen/inc/"; //legg inn root related path
  $title = Null; //use "..." max 60 charaters
  $description = NULL;  // use "..." max 160 characters
?>
<!--THis is the required php for a fragmented html page to run included files-->

<?php require($INC_DIR. "header.php");?>
<!--START unique page content-->
    <h1>App for Registrering og visning av Bjarum Airlines</h1>
    <main>
        <p>
            Bruk menyen til venstre for å registrere og vise eksisterende flyruter.
        </p>
    </main>
<!--END unique page content-->
<?php require($INC_DIR. "footer.php");?>
