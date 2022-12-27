<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>
<body>
    <form action="" method="post">
            <label>Nombre:</label>
            <input type="num" name="data" required><br>
            <button type="submit">Afficher</button>
 </form>
</body>
</html>

<?php
    $nombre = $_POST['data'];
    $i=1;
    for($i=1 ; $i<$nombre ; $i++){
        if($nombre%$i==0)
            echo "$i"."<br>";
    }
?>