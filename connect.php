<?php
//registreren
$naam = filter_input(INPUT_POST, 'naam');
$alias = filter_input(INPUT_POST, 'alias');

//connectie
try {
    $conn = new PDO("mysql:host=localhost;dbname=backgammon", "backgammon", "1q2w3e4r");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "succesvol verbonden" . PHP_EOL;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . PHP_EOL;
    $conn = null;
}

//$conn->query("INSERT INTO `gebruikers`(`id`, `naam`, `alias`) VALUES (null,'jasper','jasper123')"); //testen of de verbinding werkt

try {
    $sthInsert = $conn->prepare("INSERT INTO `gebruikers`(`id`, `naam`, `alias`) VALUES (null,:naam,:alias)"); //hier voeg je een "account" in de tabel in.
    $sthInsert->execute(array("naam" => "$naam", "alias" => "$alias"));
} catch (PDOException $ex) {
    if ($ex->getCode() == 23000) { //als je deze code krijgt zegt hij de echo
        echo 'bestaat al' . PHP_EOL;
    }
}



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