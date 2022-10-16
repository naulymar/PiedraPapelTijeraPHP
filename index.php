<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style.css">
    <title>Piedra, Papel y Tijera</title>
</head>
<body>
    <div id="main-container">
        <h1>Piedra, Papel y Tijera</h1>
        <form method="post">
            <div id="seccion-opciones-jugador">
                <input type="radio" id="piedra" name="opcion-jugador" value="piedra">
                <label for="piedra" class="input-jugador">Piedra</label>

                <input type="radio" id="papel" name="opcion-jugador" value="papel">
                <label for="papel" class="input-jugador">Papel</label>

                <input type="radio" id="tijera" name="opcion-jugador" value="tijera">
                <label for="tijera" class="input-jugador">Tijera</label>
            </div>
            <input type="submit" value="Seleccionar" id="boton-seleccionar">
        </form>
    
    <?php 

        if($_POST){
           if($_REQUEST['opcion-jugador'] == NULL){
                echo 'Selecciona una Opción';
           }else{
                if($_REQUEST['opcion-jugador'] == 'piedra'){
                    $seleccionJugador = 1;
                    echo '<br>Seleccionaste PIEDRA';
                }elseif($_REQUEST['opcion-jugador'] == 'papel'){
                    $seleccionJugador = 2;
                    echo '<br>Seleccionaste PAPEL';
                }else{
                    $seleccionJugador = 3;
                    echo '<br>Seleccionaste TIJERA';
                }

                if($seleccionJugador != NULL){
                    $seleccionPC = rand(1, 3);
                    if($seleccionPC == 1){
                        echo '<br>La selección del PC es PIEDRA';
                    }elseif($seleccionPC == 2){
                        echo '<br>La selección del PC es PAPEL';
                    }else echo '<br>La selección del PC es TIJERA';
                }

                if($seleccionPC != NULL){
                    if($seleccionJugador == $seleccionPC){
                        echo '<br>Hay un EMPATE';
                    }elseif(($seleccionJugador == 1 && $seleccionPC == 3) || ($seleccionJugador == 2 && $seleccionPC == 1) || ($seleccionJugador == 3 && $seleccionPC == 2)){
                        echo '<br>GANASTE';
                    }else{
                        echo '<br>PERDISTE';
                    }
                }
           }
        }
        else{
            echo 'Selecciona una opción';
        }
    ?>
    </div>

</body>
</html>