<!DOCTYPE html>
<html>
<head>
	<link rel="STYLESHEET" href="CSS.css" type="text/css">
	<title>
		wachtruimte.php
	</title>
</head>

<body class="inloggen">

	<div id="container">
		<div id="house" style="float:left"><a href="inloggen.php" title="Home"><img src="House.png" alt="home" width="70" height="70"></a></div>
		<div id="blok2"><h3><a href="spelregels.html" title="spelregels"> Spelregels </a></h3></div>
        <!--    <div id="blok3"><h3><a href="Jasper.html" title="jasper de groot's pagina">Jasper de Groot</a></h3></div> -->
	</div>
    
    <?php
    include 'connect.php';

    $host = "localhost";
    $naam = "";
    $alias = "";
    $db_name = "backgammon";
    $tbl_name = "gebruikers";

    // Connect to server and select databse.
    mysql_connect("$host", "$naam", "$alias")or die("cannot connect");
    mysql_select_db("$db_name")or die("cannot select DB");

    // username and password sent from form
    $myusername = $_POST['myusername'];
    $mypassword = $_POST['mypassword'];

    // To protect MySQL injection (more detail about MySQL injection)
    $myusername = stripslashes($myusername);
    $mypassword = stripslashes($mypassword);
    $myusername = mysql_real_escape_string($myusername);
    $mypassword = mysql_real_escape_string($mypassword);

    $sql = "SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
    $result = mysql_query($sql);

    // Mysql_num_row is counting table row
    $count = mysql_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {

    // Register $myusername, $mypassword and redirect to file "login_success.php"
        session_register("myusername");
        session_register("mypassword");
        header("location:login_success.php");
    } else {
        echo "Wrong Username or Password";
    }
    ?>
    
</body>
</html>