<?php
include_once("ReadingMaterial.php");
class Book extends ReadingMaterial {

    private $chapters;
    private $authors;

    //Constructor

    function __construct($chapters,$authors,$id,$title,$pages,$price){
        $this->chapters = $chapters;
        $this->authors = $authors;
        parent::__construct($id,$title,$pages,$price);
    }


    //Funciones del padre

    function añadirIva(){
        $this->price = $this->price + ($this->price* 0.6);
    }

    //Getter y setter magicos:

    function __get($propiedad){
        if(property_exists($this,$propiedad)){
           return $this->$propiedad;
        }else{
            return parent::__get($propiedad);
        }
     }


     function __set($propiedad,$value){
       $this->$propiedad=$value;
     }


}
?>