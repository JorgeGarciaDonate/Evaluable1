<!-- 3. Realizar un script que simule el tradicional juego de piedra papel o tijeras.
• Habrá un único jugador que jugará contra la máquina y podrán jugar todas las veces que
se desee. Al jugador se le mostrarán las tres opciones posibles entre las que deberá
seleccionar una, y un botón “Jugar” para enviar al servidor la jugada realizada. Una vez
terminada la partida, se volverán a mostrar las opciones y el botón para volver a jugar.
• En el servidor se generará una jugada aleatoria de las tres posibles y se comparará con
la introducida por el usuario.
• La página que se devuelve al usuario mostrará, el texto “Has elegido XXX y la máquina
ha elegido YYY” y a continuación, si el resultado ha sido que ha habido empate, ha
ganado el jugador o ha ganado la máquina.
Se dará la posibilidad de realizar una partida larga (al mejor de 5 por ejemplo), para ello el
sistema debe ser capaz de mostrar el número de partidas ganadas, empatadas y perdidas que
lleva el usuario y la máquina en cada una de las rondas.  -->

<!DOCTYPE html>
<html>

<head>
    <title>Juego de Piedra, Papel o Tijeras</title>
</head>

<body>
    <h1>Juego de Piedra, Papel o Tijeras</h1>

    <!-- Formulario para jugar -->
    <form action="av03.php" method="post">
        <p>Elige una opción:</p>
        <label><input type="radio" name="opcion" value="piedra"> Piedra</label>
        <label><input type="radio" name="opcion" value="papel"> Papel</label>
        <label><input type="radio" name="opcion" value="tijeras"> Tijeras</label>

        <!-- Campos ocultos para enviar estadísticas al servidor -->
        <input type="hidden" name="victoriasJugador" value="<?php echo $victoriasJugador; ?>">
        <input type="hidden" name="victoriasMaquina" value="<?php echo $victoriasMaquina; ?>">
        <input type="hidden" name="derrotasJugador" value="<?php echo $derrotasJugador; ?>">
        <input type="hidden" name="derrotasMaquina" value="<?php echo $derrotasMaquina; ?>">
        <input type="hidden" name="empates" value="<?php echo $empates; ?>">

        <input type="submit" value="Jugar">
    </form>

    <!-- Mostrar resultado del juego -->
    <div id="resultado">
        <?php
        if (isset($_GET['resultado'])) {
            echo $_GET['resultado'];
        }
        ?>
    </div>

    <!-- Estadísticas del Jugador y la Máquina -->
    <div>
        <h2>Resultados jugador</h2>
        <p>Victorias: <?php echo isset($_GET['victoriasJugador']) ? $_GET['victoriasJugador'] : 0; ?></p>
        <p>Derrotas: <?php echo isset($_GET['derrotasJugador']) ? $_GET['derrotasJugador'] : 0; ?></p>
        <p>Empates: <?php echo isset($_GET['empates']) ? $_GET['empates'] : 0; ?></p>
    </div>

    <div>
        <h2>Resultados máquina</h2>
        <p>Victorias: <?php echo isset($_GET['victoriasMaquina']) ? $_GET['victoriasMaquina'] : 0; ?></p>
        <p>Derrotas: <?php echo isset($_GET['derrotasMaquina']) ? $_GET['derrotasMaquina'] : 0; ?></p>
        <p>Empates: <?php echo isset($_GET['empates']) ? $_GET['empates'] : 0; ?></p>
    </div>

</body>

</html>
