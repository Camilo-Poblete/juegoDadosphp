let audio = new Audio('../juegosDados/juegoDados.mp3'); // Sonido del dado

// Función para generar los dados visualmente sin animación
function generarDados() {
    cantidadDados = parseInt(document.getElementById('cantidadDados').value);

    if (modalidadSeleccionada === 0) {
        Swal.fire({
            title: 'Error',
            text: 'Debe seleccionar una modalidad antes de lanzar los dados.',
            icon: 'error',
            confirmButtonText: 'Aceptar'
        });
        return;
    }

    const dadosJugador1Div = document.getElementById('dadosJugador1');
    const dadosJugador2Div = document.getElementById('dadosJugador2');
    dadosJugador1Div.innerHTML = '';
    dadosJugador2Div.innerHTML = '';

    for (let i = 0; i < cantidadDados; i++) {
        dadosJugador1Div.innerHTML += `<img src="../juegosDados/img/dados/rand.svg" class="dado" id="dadoJugador1_${i}">`;
        dadosJugador2Div.innerHTML += `<img src="../juegosDados/img/dados/rand.svg" class="dado" id="dadoJugador2_${i}">`;
    }

    jugar();
}

function jugar() {
    let dadosJugador1 = [];
    let dadosJugador2 = [];

    // Iniciar el sonido
    audio.play();

    for (let i = 0; i < cantidadDados; i++) {
        dadosJugador1.push(lanzarDado());
        dadosJugador2.push(lanzarDado());
    }

    for (let i = 0; i < cantidadDados; i++) {
        document.getElementById(`dadoJugador1_${i}`).classList.add('animarDado');
        document.getElementById(`dadoJugador2_${i}`).classList.add('animarDado');
    }

    setTimeout(() => {
        // Detener el sonido
        audio.pause();
        audio.currentTime = 0;  // Reiniciar el sonido para la próxima vez que se juegue

        for (let i = 0; i < cantidadDados; i++) {
            actualizarDado(`dadoJugador1_${i}`, dadosJugador1[i]);
            actualizarDado(`dadoJugador2_${i}`, dadosJugador2[i]);
        }

        for (let i = 0; i < cantidadDados; i++) {
            document.getElementById(`dadoJugador1_${i}`).classList.remove('animarDado');
            document.getElementById(`dadoJugador2_${i}`).classList.remove('animarDado');
        }

        const sumaJugador1 = dadosJugador1.reduce((a, b) => a + b, 0);
        const sumaJugador2 = dadosJugador2.reduce((a, b) => a + b, 0);

        document.getElementById('sumaJugador1').innerText = `Suma: ${sumaJugador1}`;
        document.getElementById('sumaJugador2').innerText = `Suma: ${sumaJugador2}`;

        let resultado = '';

        if (sumaJugador1 > sumaJugador2) {
            resultado = modalidadSeleccionada === 1 ? '¡Jugador gana!' : '¡Jugador 1 gana!';
            Swal.fire({
                title: resultado,
                text: '¡Felicidades!',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
        } else if (sumaJugador1 < sumaJugador2) {
            resultado = modalidadSeleccionada === 1 ? '¡Máquina gana!' : '¡Jugador 2 gana!';
            Swal.fire({
                title: resultado,
                text: '¡Inténtalo de nuevo!',
                icon: 'error',
                confirmButtonText: 'Aceptar'
            });
        } else {
            resultado = '¡Es un empate!';
            Swal.fire({
                title: resultado,
                text: '¡Qué empate!',
                icon: 'question',
                confirmButtonText: 'Aceptar'
            });
        }

        const jugada = `Jugador 1: ${sumaJugador1}, Jugador 2: ${sumaJugador2} - ${resultado}`;
        historialJugadas.push(jugada);

        // Guardar historial en localStorage
        localStorage.setItem('historialJugadas', JSON.stringify(historialJugadas));

        const historialElement = document.getElementById('historial');
        historialElement.innerHTML = '';
        historialJugadas.forEach((jugada, index) => {
            historialElement.innerHTML += `<li class="list-group-item">${index + 1}: ${jugada}</li>`;
        });

        document.getElementById('resultado').innerText = resultado;
    }, 1500); // Tiempo de espera para la animación de los dados
}
