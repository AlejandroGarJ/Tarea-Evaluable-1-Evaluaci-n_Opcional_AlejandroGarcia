Almacene en un vector los 10 primeros número pares. Imprímalos cada uno en una
línea.

<br>


<?php

$contadorPares=0;
$x=0;
$listaNumeros=array();
do{

if($x%2==0) {
    $contadorPares++;
    array_push($listaNumeros, $x);
}
$x++;


}while($contadorPares<10);


foreach($listaNumeros as $valor){
    echo $valor."<br>";
}


?>

