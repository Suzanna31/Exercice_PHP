<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>

</html>

<?php
//Avec la boucle while
$nombre=500;
$compteur=0;
while($liste!=$nombre)
{
$liste=rand(0,1000);
$compteur++;
}
echo "$nombre trouvé en $compteur coups ";
?>


