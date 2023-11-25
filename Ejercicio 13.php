Realiza un programa en php en el que se declare un vector de 5 posiciones. Cada
posición tomará como valor un color distinto (azul, rojo, verde, rosa, naranja). A
continuación, deberá de comprobar si el valor rosa se encuentra almacenado en el array.
Si es así, deberá de borrar el elemento del array.
<br>
<?php


$listaColores = ["Azul","Rojo","Verde","Rosa","Naranja"];

for($x=0;$x<sizeof($listaColores);$x++){


    echo $listaColores[$x];
    echo "<br>";
     
     
     }
 

for($x=0;$x<sizeof($listaColores);$x++){


if($listaColores[$x]=="Rosa"){
    array_splice($listaColores,$x,1);
    echo "<br> La posición número ".$x." del array contiene 'Rosa' <br>";

} 


}

for($x=0;$x<sizeof($listaColores);$x++){


   echo $listaColores[$x];
   echo "<br>";
    
    
    }


?>