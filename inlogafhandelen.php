    <?php    
        
    include "inlogfuncties.php";
    
    if(aanmelden()==true){
        header('location: ./wachtruimte.php');
        }