<?php

$numero[]=$_POST['numero1'];
$numero[]=$_POST['numero2'];
$numero[]=$_POST['numero3'];
$numero[]=$_POST['numero4'];
$numero[]=$_POST['numero5'];
$numero[]=$_POST['numero6'];


$suma=0;

foreach ($numero as $sum){
    $suma= $suma + $sum;
    
}

echo "la suma de todos los numeros es: " .$suma."<br> ";
$contar= count($numero);
echo "la cantidad de numeros es :" .$contar."<br>";
$media= $suma / $contar;
echo "la media es: " .$media."<br>";
$pares=0;
foreach ($numero as $par){
    if($par%2==0){
        $pares++;
        
    }
}
echo "hay ".$pares. " numeros pares";