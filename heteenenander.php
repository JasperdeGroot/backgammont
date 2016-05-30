<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $.getJSON("t.php", {speler:1, 'vak': 'x'},  function(result){
            console.log(result)
            $("div").html("<b>"+result.x + ":" + result.y)
        });
    });
});
</script>
</head>
<body>

    Met deze knop is het uiteindelijk de bedoeling dat je een tabel krijgt te zien.
    
<button>Get JSON data</button>

<div></div>

<?php
//    $getJSON = standaard vraag naar Json, meerdere objecten (blokjes) in een.
?>

</body>
</html>
