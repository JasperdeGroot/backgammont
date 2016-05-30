Even wachten...

<?php
include "inlogfuncties.php";

if (aanmelden() === true){
    header('location: ./wachtruimte.php');
    }
    elseif (aanmelden() === false){
        header('location: ./registreren.php');
    }

    
        $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();    
    
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
