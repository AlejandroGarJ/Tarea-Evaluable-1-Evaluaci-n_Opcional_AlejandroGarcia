<?php

abstract class ReadingMaterial{

    private $id;
    private $title;
    private $pages;
    private $price;

    //Clases abstractas

    abstract function añadirIva();
     function mostrarCategoria(){
        if($this->pages <50 ) echo "Mini";
        else echo "Large";
     }


    //Constructor

    function __construct($id, $title, $pages, $price){
        $this->id = $id;
        $this->title = $title;
        $this->pages = $pages;
        $this->price = $price;

    }

    //Getter y setter magicos:

    function __get($propiedad){
        if(property_exists($this,$propiedad)){
           return $this->$propiedad;
        }
     }


     function __set($propiedad,$value){
       $this->$propiedad=$value;
     }

}
?>