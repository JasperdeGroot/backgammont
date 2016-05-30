Even wachten...

<?php
include "inlogfuncties.php";

if (aanmelden() === true){
    header('location: ./wachtruimte.php');
    }
    elseif (aanmelden() === false){
        header('location: ./registreren.php');
    }

//                if (isset($_POST["verzend9"])) {
//                    $_SESSION["ingelogd"] = 0;
//                    $naam = $_POST["naam"];
//                    if (!isset($_POST["naam"]) || !isset($_POST["alias"])) {
//                        echo 'Misschien helpt het als je een gebruikersnaam en/of een wachtwoord invoerdt...';
//                        exit;
//                    }
//
//                    if ((($_POST["naam"] == "Monster") && ($_POST["alias"] == "Monster"))) {
//
//                        $_SESSION["naam"] = $_POST["naam"];
//                        $_SESSION["ingelogd"] = 1;
//                        echo "Welkom!! " . $_SESSION["naam"];
//                        echo "<br> Klik <a href=gpagina.php class=hierknop>hier</a> om naar de super geheime pagina te gaan.";
//                    } else {
//                        echo "Probeer het opnieuw";
//                        $_SESSION["ingelogd"] = 0;
//                    }
//                }
