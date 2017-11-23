<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

//tableau normal
$mois = array ("janvier", "février", "mars", "avril", "mai", "Juin",
"juillet", "août", "septembre", "octobre", "novembre", "décembre");
$longeurtableau = count($mois);

echo $mois[7]. '<br>';
echo '<br>';

//tableau associatif
$departements = array(02 => "Aisne", 59=> "Nord", 60=> "Oise", 62 => "Pas-deCalais", 80 => "Somme", "Reims" => "Marne") ;


echo "le département du N° 59 est : " .$departements[59].'<br>';
echo '<br>';
echo "Le département de Reims est : " .$departements["Reims"].'<br>';
echo '<br>';

//pour tabeau normal
for($x = 0 ; $x < $longeurtableau; $x++){
    echo $mois[$x];
    echo "<br>";
}

echo '<br>';

//pour tableau associatif
foreach($departements as $index => $valeur){
    echo $index. ' = '.$valeur. '<br>';
}

echo '<br>';
foreach ($departements as $index => $valeur){
    echo "Le département " .''.$valeur.' '. "a le numéro " .' '.$index .'<br>';
}



?>

</body>
</html>