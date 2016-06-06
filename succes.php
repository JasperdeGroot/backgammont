<!DOCTYPE html>
<html>
    <head>
        <link rel="STYLESHEET" href="CSS.css" type="text/css">
        <title>
            succes.php
        </title>
    </head>

    <body class="inloggen">


        <div id="container">
            <div id="house" style="float:left"><a href="index.php" title="Home"><img src="House.png" alt="home" width="70" height="70"></a></div>
            <div id="blok2"><h3><a href="spelregels.html" title="spelregels"> Spelregels </a></h3></div>
            <!--    <div id="blok3"><h3><a href="Jasper.html" title="jasper de groot's pagina">Jasper de Groot</a></h3></div> -->

        </div>

            <div id="registreer-menu">
                </br>
                <?php
                    include('connect.php');
                ?>
                </br>
                Welkom, als u boven alleen "succesvol verbonden" ziet. Dan heeft u een account aangemaakt bij het backgammon-spel.
            </div>

    </body>
</html>