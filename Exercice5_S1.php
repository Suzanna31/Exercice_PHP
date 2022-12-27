<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <form action="" method="post">
            <label>Nombre:</label>
            <input type="num" name="data" required><br>
            <button type="submit">Calculer</button>
 </form>
</body>
</html>

<?php
    $rayon = $_POST['data'];
    $diamètre = 2*$rayon;
    $perimetre = 2*3.14*$rayon;
    $surface = ($rayon*$rayon)*3.14;
    echo "Le diamètre du cercle de rayon $rayon est $diamètre"."<br>";
    echo "Le périmètre du cercle de rayon $rayon est $perimetre"."<br>";
    echo "La surface du cercle de rayon $rayon est $surface"

?>