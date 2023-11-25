<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    if (isset($_GET['opcion'])==false){
        $puntosJ=0;
        $puntosM=0;
        $nEmpates=0;
    }
    else{

        $puntosJ=$_GET['puntosJ'];
        $puntosM=$_GET['puntosM'];
        $nEmpates=$_GET['nEmpates'];
    }

    
    ?>

<?php 

if (isset($_GET['opcion'])){
 
        $random = rand(1,3);
        $opcionMaquina;

        switch ($random){
            case 1: $opcionMaquina="Piedra";
            break;
            case 2: $opcionMaquina="Papel";
            break;
            case 3: $opcionMaquina="Tijera";
        }

        if($_GET['opcion']=="Piedra"){
                
            if($opcionMaquina=="Piedra")$nEmpates++;
            if($opcionMaquina=="Papel")$puntosM++;
            if($opcionMaquina=="Tijera")$puntosJ++;
        }
        if($_GET['opcion']=="Papel"){
                
            if($opcionMaquina=="Piedra")$puntosJ++;
            if($opcionMaquina=="Papel")$nEmpates++;
            if($opcionMaquina=="Tijera")$puntosM++;
        }
        if($_GET['opcion']=="Tijera"){
                
            if($opcionMaquina=="Piedra")$puntosM++;
            if($opcionMaquina=="Papel")$puntosJ++;
            if($opcionMaquina=="Tijera")$nEmpates++;
        }
    } 
        ?>
   
   <!-- Una vez modificadas todas las variables si una de dos == 5 igualare todo a 0 -->

    <?php
    if($puntosJ==5 || $puntosM==5){

        $puntosJ=0;
        $puntosM=0;
        $nEmpates=0;
        $opcionMaquina=null;
    }

    ?>

    <table border ="1">

        <tr>
            <th>Puntos Jugador</th>
            <th>Puntos Máquina</th>
            <th>Empates</th>
        </tr>
        <tr>
            <td><?php echo $puntosJ;?></td>
            <td><?php echo $puntosM;?></td>
            <td><?php echo $nEmpates;?></td>
        </tr>
    </table>



   


<form action="formulario.php" method="get">


<input type="radio" id="opcion" name="opcion" value="Piedra">
 <label for="opcion">Piedra</label><br>

 <input type="radio" id="opcion" name="opcion" value="Papel">
 <label for="opcion">Papel</label><br>

 <input type="radio" id="opcion" name="opcion" value="Tijera">
 <label for="opcion">Tijera</label><br>
    <br>

    <input type="hidden" id="puntosM" name="puntosM" value="<?php echo $puntosM;?>">
<input type="hidden" id="puntosJ" name="puntosJ" value="<?php echo $puntosJ;?>">
<input type="hidden" id="nEmpates" name="nEmpates" value="<?php echo $nEmpates;?>">
 <input type="submit" value="Jugar">

</form>








 

    




</body>
</html>