<?php

include("Book.php");
include("Magazine.php");

$libro = new Book(5,"Alejandro",1,"El libro de la selva",30,10);

$revista = new Magazine("recursos",2,"Deportes",120,5);

$libro1   = new Book(5,"Alejandro",1,"El libro de la selva",30,15);




$listaLibros = array($libro,$revista,$libro1);



//Funciones de ordenacion
                    function ordenarPorPrecio(&$listaMaterial){

                        for($x=0;$x<sizeof($listaMaterial);$x++){

                            for($y=($x+1);$y<sizeof($listaMaterial);$y++){

                                if($listaMaterial[$x]->price > $listaMaterial[$y]->price){

                                    $materialX =  $listaMaterial[$x];

                                    $listaMaterial[$x] = $listaMaterial[$y];
                                    $listaMaterial[$y] = $materialX;



                                }
                            }


                        }
                    }

                    function ordenarPorTitulo($listaMaterial) {
                        usort($listaMaterial, function ($a, $b) {
                            return strcmp($a->title, $b->title);
                        });
                    }


               

?>