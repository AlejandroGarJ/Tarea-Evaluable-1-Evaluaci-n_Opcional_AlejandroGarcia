7. Crea un array asociativo que contenga la siguiente información:
Array supermercado:
Fruta (Pera, Manzana, Plátano)
Verdura (Berenjena, Calabacín)
Lácteos (leche, yogur, queso, kéfir)
Muestra el array en pantalla haciendo uso del bucle foreach.
<br>

<?php

$listaCompra = array(

        "Fruta" => array("Pera","Manzana","Plátano"),
        "Verdura" => array("Berenjena","Calabacín"),
        "Lácteos" => array("Leche","Yogurt","Queso","Kéfir")


);


foreach($listaCompra as $clave => $valor){

echo $clave.": ";

for($x=0;$x<sizeof($valor);$x++){

echo $valor[$x]." ";

}
echo "<br>";


}








?>