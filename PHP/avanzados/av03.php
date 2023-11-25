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

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $opciones = ["piedra", "papel", "tijeras"];
    $opcionJugador = $_POST["opcion"];
    $opcionMaquina = $opciones[rand(0, 2)];
    $victoriasJugador = (int)$_POST["victoriasJugador"];
    $victoriasMaquina = (int)$_POST["victoriasMaquina"];
    $derrotasJugador = (int)$_POST["derrotasJugador"];
    $derrotasMaquina = (int)$_POST["derrotasMaquina"];
    $empates = (int)$_POST["empates"];
    
    if ($opcionJugador === $opcionMaquina) {
        $resultado = "Has elegido $opcionJugador y la máquina ha elegido $opcionMaquina. Empate.";
        // Ya no es necesario aumentar las variables aquí
    } elseif (
        ($opcionJugador === "piedra" && $opcionMaquina === "tijeras") ||
        ($opcionJugador === "papel" && $opcionMaquina === "piedra") ||
        ($opcionJugador === "tijeras" && $opcionMaquina === "papel")
    ) {
        $resultado = "Has elegido $opcionJugador y la máquina ha elegido $opcionMaquina. Has ganado";
        // Aumenta las estadísticas
        $victoriasJugador++;
        $derrotasMaquina++;
    } else {
        $resultado = "Has elegido $opcionJugador y la máquina ha elegido $opcionMaquina. Has perdido.";
        // Aumenta las estadísticas
        $victoriasMaquina++;
        $derrotasJugador++;
    }

    // Luego, redirige con los resultados
    header("Location: juego.php?resultado=" . urlencode($resultado) . "&victoriasJugador=" . $victoriasJugador . "&victoriasMaquina=" . $victoriasMaquina . "&derrotasJugador=" . $derrotasJugador . "&derrotasMaquina=" . $derrotasMaquina . "&empates=" . $empates);
}
?>

