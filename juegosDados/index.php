<?php
    
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <!-- ICONOS DE FONT AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

        <!-- Main CSS -->
        <link rel="stylesheet" href="../juegosDados/css/main.css">

        <title>Juego de dados |Aleatorio</title>
    </head>

    <body>        
        
        <!-- INICIO DE NAV HERRAMIENTIC -->
        <ul class="nav py-2 bg-dark justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="../juegosDados/num-aleatorio.php">
                    <h2>Juego de dados</h2>
                </a>
            </li>            
        </ul>
        <!-- FIN DE NAV HERRAMIENTIC -->
        
        <!-- CONTENIDO PRINCIPAL -->
        <div class="container content-main">            
            <div class="row my-5"></div>            
            <div class="row text-center justify-content-center">
                
                <!-- TARJETA DE DADOS -->
                <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-light mb-3" style="height: 400px;"> <!-- Aumentamos la altura de la tarjeta -->
                        <div class="card-header">
                            <b>
                                Lanzar dados
                            </b>  
                        </div>
                        <div class="card-body bg-white text-center" style="padding: 40px;">  <!-- Aumentamos el padding para mayor espacio -->
                            <a href="../juegosDados/num-aleatorio.php" data-toggle="tooltip" data-placement="bottom" title="Simular el lanzamiento de dos dados">
                                <!-- Aumentamos el tamaño del dado con estilo directo -->
                                <i class="fas fa-dice-six" style="font-size: 150px; color: #007bff;"></i> 
                            </a>  
                            <p class="mt-3">Haz clic en el dado para lanzar.</p>
                        </div>
                    </div>
                </div>

            </div>        
        </div>
        <!-- FIN DEL CONTENIDO PRINCIPAL -->

        <!-- INICIO DEL FOOTER -->
        
        <!-- FIN DEL FOOTER -->

        <!-- JavaScript -->
        <section>
            <!-- jQuery -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

            <!-- Popper JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

            <!-- Bootstrap JS -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

            <!-- Main JS -->
          
        </section>
        
    </body>
</html>
