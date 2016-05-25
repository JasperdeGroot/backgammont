<?php

Include('connect.php'); //dingentje met database
//include connect.php voor verbinding met database.
//if submit is not blanked i.e. it is clicked.
If(isset($_REQUEST['submit'])!='')
{
    
    //weet niet of ik dit echt gebruik... ik denk van niet.
    If($_REQUEST['naam']=='' || $_REQUEST['alias']=='')
        {
            Echo "Er mist iets";
        }
    Else
        {
            $sql="insert into gebruikers(naam,allias) values('".$_REQUEST['naam']."', '".$_REQUEST['alias']."')";
            $res=mysql_query($sql);
            If($res)
        {
            Echo "U staat nu in de database van het spel";
        }
    Else
        {
            Echo "Je staat helaas niet in de database, er is iets misgegaan";
        }

    }
}

?>