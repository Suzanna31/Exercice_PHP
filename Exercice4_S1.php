<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <form action="" method="post">
            <input type="num" name="data1" required><br>
            <input type="num" name="data2" required><br>
            <button type="submit">Vérifier</button>
 </form>
</body>
</html>
<?php
    function ppcm($a,$b){
        $result=0;
        $res = $a * $b;
        while($a > 1){
            $r = $a % $b;
        if($r == 0 ){
          $result = $res / $b;
            break;  // sorti quand résultat trouvé
                 }
            $a = $b;
            $b = $r;
        }
         return $result; // retourne le résultat
    }
?>
<?php
    $a = $_POST['data1'];
    $b = $_POST['data2'];
    echo ppcm($a,$b);

?>

     


