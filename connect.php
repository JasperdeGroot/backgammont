<?php

//registreren
$naam = filter_input(INPUT_POST, 'naam');
$alias = filter_input(INPUT_POST, 'alias');

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "backgammon";

//connectie tussen de gebruiker en de server.
try {
    $conn = new PDO("mysql:host=localhost;dbname=backgammon", "backgammon", "1q2w3e4r");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "succesvol verbonden </br>" . PHP_EOL;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . PHP_EOL;
    $conn = null;
}

//$conn->query("INSERT INTO `gebruikers`(`id`, `naam`, `alias`) VALUES (null,'jasper','jasper123')"); //testen of de verbinding werkt
//registreer-stuk. In het registreer-blokje kan je een naam invullen waardoor er een account in de database word gemaakt.
try {
    $sthInsert = $conn->prepare("INSERT INTO `gebruikers`(`id`, `naam`, `alias`) VALUES (null,:naam,:alias)"); //hier voeg je een "account" in de tabel in.
    $sthInsert->execute(array("naam" => "$naam", "alias" => "$alias"));
} catch (PDOException $ex) {
    if ($ex->getCode() == 23000) { //als je deze code krijgt zegt hij de echo
        echo 'De door uw verzonnen gebruikersnaam/alias bestaat al </br>' . PHP_EOL;
    }
}

//==============================================================================

  class USER
    {
        private $db;
        
        function __construct($DB_con)
        {
            $this->db = $DB_con;
        }
 
    public function login($naam,$alias)
    {
       try
       {
          $stmt = $this->db->prepare("SELECT * FROM users WHERE user_naam=:naam OR user_alias=:alias LIMIT 1");
          $stmt->execute(array(':naam'=>$naam, ':alias'=>$naam));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($naam, $userRow['user_pass']))
             {
                $_SESSION['user_session'] = $userRow['user_id'];
                return true;
             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
 
   public function is_loggedin()
   {
      if(isset($_SESSION['user_session']))
      {
         return true;
      }
   }
 
   public function redirect($url)
   {
       header("Location: $url");
   }
 
   public function logout()
   {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
   }
}















//Iets handigs
//$sth = $conn->prepare('SELECT * from gebruikers where id = :id'); //met prepare en exeute geef je een bepaalde waarde aan variabelen ( met =>).
//$sth->execute(array('id' => 8)); //hier geef je de id waarde 8
//$result = $sth->fetchAll();
//print_r($result);
//echo $result[0]['naam'] .PHP_EOL;
//
//$sth = $conn->prepare('SELECT * from gebruikers');
//$sth->execute();
//$result = $sth->fetchAll();
//print_r($result);
//echo $result[2]['naam']; //hij echo'ed joris als laatst (door de 2)
//
//foreach ($result as $key => $value) {
//    echo $value["naam"] .PHP_EOL;
//}

//$sqldelete =  "delete from gebruikers where naam = :naam";
//$sth = $conn->prepare($sqldelete, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
//$sth->execute(array ('naam' => 'test'));