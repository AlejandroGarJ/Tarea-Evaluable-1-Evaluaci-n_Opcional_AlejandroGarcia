<?php




    

    if(isset($_GET['tipoMoneda'])==false ) {
        echo "No se ha rellenado ningún campo";
    }
    else if(isset($_GET['cantidad'])== false) {
        echo "No se ha introducido ninguna cantidad";
    }
    else{

        
    $cantidad = $_GET['cantidad'];
    $tipoMoneda = $_GET['tipoMoneda'];



    switch($tipoMoneda){


        case 1: $cantidad = $cantidad *1.05." $";
        break;
        case 2: $cantidad = $cantidad * 157.3." ¥";
        break;
        case 3: $cantidad = $cantidad * 0.000040."  ₿";
        break;
        case 4: $cantidad = $cantidad * 0.86." £";
    }



    echo "<h1>".$cantidad."</h1>";
}

?>