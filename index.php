<!DOCTYPE html>
<html>
    <head>
        <link rel="STYLESHEET" href="CSS.css" type="text/css">
        <title>
            registreren.php
        </title>
    </head>

    <body class="inloggen">


        <div id="container">
            <div id="house" style="float:left"><a href="index.php" title="Home"><img src="House.png" alt="home" width="70" height="70"></a></div>
            <div id="blok2"><h3><a href="spelregels.html" title="spelregels"> Spelregels </a></h3></div>
            <!--    <div id="blok3"><h3><a href="Jasper.html" title="jasper de groot's pagina">Jasper de Groot</a></h3></div> -->

        </div>

        <form name="registreren" action="succes.php" method="POST">
            <div id="registreer-menu">
                Naam</br><input type="text" name="naam"/></br>
                Alias</br><input type="text" name="alias"/></br>
                </br></br>
                <input type="submit" value="registreren">	
            </div>
        </form>
        
        <!--
        tussenRuimte.php (via POST data), check op valide gegevens ; nee include en excit
        ja:      wachtruimte.php?id=$datIsMijnId;  // $datIsMijnId van _POST['alias'] ; opvraagbaar met _GET['id']
        -->
        
        <form name="inloggen" action="tussenruimte.php" method="POST">
            <div id="inlog-menu">
                Naam</br><input type="text" name="naam" id="naam"/></br>
                Alias</br><input type="text" name="alias" id="alias"/></br>
                </br></br>
                <input type="submit" value="inloggen">
            </div>
        </form>

        <h1>De planning van mijn applicatie-opdracht</h1>
        <img src="planning.png" alt="home" width="70" height="70">
            
            
            <?php

        
        
        
// =====================================================================================================================================================================        

//        if (!$user->is_loggedin()) {
//            $user->redirect('tussenruimte.php');
//        }
//        $user_id = $_SESSION['user_session'];
//        $stmt = $DB_con->prepare("SELECT * FROM users WHERE user_id=:user_id");
//        $stmt->execute(array(":user_id" => $user_id));
//        $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
//        ?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
                <link rel="stylesheet" href="style.css" type="text/css"  />
                <title>welcome - <?php print($userRow['user_email']); ?></title>
            </head>

            <body>

                <!-- welcome : <?php //print($userRow['user_name']); ?>

    </body>
</html>

http://www.w3schools.com/php/php_mysql_insert_multiple.asp misschien is dit handig
http://www.wikihow.com/Create-a-Secure-Login-Script-in-PHP-and-MySQL ook handig
http://localhost/phpmyadmin/server_sql.php?db=&lang=nl&collation_connection=utf8mb4_unicode_ci&token=368a89427ff6df03fc9860792ccffb63 weg naar de database
 