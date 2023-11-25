<?php
include_once("ReadingMaterial.php");
class Magazine extends ReadingMaterial{

    private $additionalResources;

    function __construct($additionalResources,$id,$title,$pages,$price){
        $this->additionalResources = $additionalResources;
        parent::__construct($id,$title,$pages,$price);
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


 function añadirIva(){
    $this->price = $this->price + ($this->price* 0.1);
}

}
?>