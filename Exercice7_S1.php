
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parfait</title>
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
#Un nombre est parfait s'il est égal à la somme de ses diviseurs exceptés lui-même
     $nombre = $_POST['data'];
        $s = 0;
        

    for ($i=1 ; $i < $nombre ; ++$i)
        if($nombre % $i == 0)
            $s = $s + $i ;
        if($s != $nombre)
            echo (" $nombre n'est pas parfait ");
        else 
            echo (" $nombre est parfait");
?>
	