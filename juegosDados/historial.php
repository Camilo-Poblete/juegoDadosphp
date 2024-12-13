<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../juegosDados/css/dados.css">

    <link rel="stylesheet" href="../juegosDados/css/historial.css">
    <title>Historial de Jugadas - Juego de Dados</title>
   
</head>
<body>
    <nav class="navbar text-white">
        <a class="navbar-brand">Historial de Jugadas</a>
        <div class="form-inline">
            <button class="btn ml-2 btn-outline-success" onclick="window.location.href='num-aleatorio.php'">Volver al Juego</button>
        </div>
    </nav>

    <div class="container content-main">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h3>Historial de Partidas</h3>
            </div>
        </div>

        <div class="filter-container text-center">
            <input type="text" id="filterInput" class="form-control" placeholder="Buscar por jugador (Ej. Jugador 1)">
        </div>

        <div class="row justify-content-center text-center">
            <div class="col-12">
                <div id="loading" class="loading">
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Cargando...</span>
                    </div>
                    <span>Cargando historial...</span>
                </div>
                <ul id="historial" class="list-group">
                    <!-- Aquí se agregarán las jugadas desde localStorage -->
                </ul>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Juego de Dados | Todos los derechos reservados</p>
    </div>

    <script src="../juegosDados/js/historial.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-Uksd6f0BT4cz9PzIiBFTTw9lhz6x5Z1xFfU8xaA6wGm5xd3qXfQflU0lKz3zi7s" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0rxAZT+Tr0pnKrX6d/y0f5+59U8z9P5B8r5q9fiw0EAY8w6R" crossorigin="anonymous"></script>
</body>
</html>
