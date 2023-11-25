Realizar un programa en php donde dado un número del 1 al 7 indique a que día de la
semana corresponde. Si el número no está entre 1 y 7 el programa lo deberá de indicar. 



<br>

<?php

$n=7;



if($n<=0 or $n>7) { echo "<br>Día Incorrecto";}


echo "<br>";
switch ($n){

    case 1: echo "Lunes";
    break;
    case 2: echo "Martes";
    break;
    case 3: echo "Miércoles";
    break; 
    case 4: echo "Jueves";
    break;
    case 5: echo "Viernes";
    break;
    case 6: echo "Sábado";
    break;
    case 7: echo "Domingo";
}



?>