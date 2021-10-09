<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szakdolgozat</title>
</head>
<body>
    <h1>Üdvözöllek!</h1>
    <form action="index.php" method="POST">
        <input type="number" name="" id=""><br>
        <input type="button" value="Elküld">
</form>
    
</body>
</html>

<?php

if(isset($_POST['number1']))

    $ho=$_POST['number1']

    if(!empty($ho))
    {
 
    if($ho<=0){
            echo(<h2>"Szilárd."</h2>);
        }
        else if($ho<100){
            echo("Folyékony.");
        }
        else {
            echo("Légnemű.");
        }
    }
    else {
        echo("Üres a mező!")
    }



/*nev="Jakab Máté";
echo("<h2>Üdvözöllek: $nev legyen szép napod.</h2>");*/
?>