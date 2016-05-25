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
            <div id="house" style="float:left"><a href="registreren.php" title="Home"><img src="House.png" alt="home" width="70" height="70"></a></div>
            <div id="blok2"><h3><a href="spelregels.html" title="spelregels"> Spelregels </a></h3></div>
            <!--    <div id="blok3"><h3><a href="Jasper.html" title="jasper de groot's pagina">Jasper de Groot</a></h3></div> -->

        </div>

        <form name="registreren" action="succes.php" method="POST">
            <div id="registreer-menu">
                Naam</br><input type="text" name="naam"/></br>
                Alias</br><input type="text" name="alias"/></br>
                </br>
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
                </br>
                <input type="submit" value="inloggen">
            </div>
        </form>

    </body>
</html>

hjttp://www.w3schools.com/php/php_mysql_insert_multiple.asp misschien is dit handig
hjttp://www.wikihow.com/Create-a-Secure-Login-Script-in-PHP-and-MySQL ook handig
hjttp://localhost/phpmyadmin/server_sql.php?db=&lang=nl&collation_connection=utf8mb4_unicode_ci&token=368a89427ff6df03fc9860792ccffb63 weg naar de database
 