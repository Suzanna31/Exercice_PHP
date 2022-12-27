<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <form action="" method="post">
            <label for="name">Nombre : </label>
            <input type="num" name="data" required>
            <button type="submit">Vérifier</button>
 </form>
</body>
</html>
<?php
     $nombre = $_POST['data'];
     if($nombre%3==0 AND $nombre%5==0){
     echo "$nombre est multiple de 3 et de 5 <br />";
     }

     else{
     echo "$nombre n'est pas multiple de 3 et de 5 <br />";
     }

?>
