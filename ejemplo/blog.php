<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <?php include ("header.php"); ?>
    <title>Blog</title>
  </head>
  <body>

        <!-- Jumbotron -->
        <div id="intro" class="p-5 text-center bg-light">
          <h1 class="mb-3 h2">Blog de Noticias Deportivas</h1>
          <p class="mb-3"><em>Encontras toda la información destacada de tus deportes favoritos.</em></p>

        </div>
        <!-- Jumbotron -->
    
      <!--Main layout-->
      <main class="my-5">
        <div class="container">
          <!--Section: Content-->
          <section class="text-center">
            <h4 class="mb-5"><strong>Ultimas Entradas</strong></h4>
    
            <div class="row">
              <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="imagenes/Allianz.jpg" class="img-fluid" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Los estadios candidatos para albergar las finales europeas en 2026 y 2027</h5>
                    <div class="mb-1 text-muted">19/07/2023</div>
                    <p class="card-text">
                    La UEFA ha dado a conocer las declaraciones de interés de hasta nueve federaciones que buscarán albergar las finales de todas las competiciones europeas en los años 2026 y 2027. Algunos son: Puskas Arena (Hungria), San Siro (Italia), Allianz Arena (Alemania).<br><br>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="imagenes/boston.webp" class="img-fluid" />
                    <a href="#">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Jaylen Brown firma el contrato más grande de la historia</h5>
                    <div class="mb-1 text-muted">18/07/2023</div>
                    <p class="card-text">
                    Jaylen Brown escribe su nombre en los libros de historia. El escolta de los Celtics llega a un acuerdo con Boston para firmar el contrato más grande de la historia de la NBA: 304 millones de dólares en cinco temporadas. <br><br>
                  </p>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="Imagenes/bernabeu.webp" class="img-fluid" />
                    <a href="#">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">El Nuevo Bernabeu</h5>
                    <div class="mb-1 text-muted">20/07/2023</div>
                    <p class="card-text">
                    El proyecto es fantástico, ya que la nueva funcionalidad del estadio es un gran diferencial para el entretenimiento de todo tipo. Otros estadios, por ejemplo, no fueron creados o renovados teniendo en cuenta el concepto de entretenimiento en su totalidad, para juegos, seminarios, eventos y espectáculos de todos los tamaños con rápida transformación. <br><br>
                  </p>
                  </div>
                </div>
              </div>
            </div>
  

              </div>
            </div>
          </section>
          <!--Section: Content-->
    
          <!-- Pagination -->
          <nav class="my-4" aria-label="...">
            <ul class="pagination pagination-circle justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#">Prev</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>

              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </main>
      <!--Main layout-->
    
      <!--Footer-->
      <footer class="bg-light text-lg-start">
        <div class="py-4 text-center">
          <a role="button" class="btn btn-success btn-lg m-2"
            href="contacto.php">
            Contáctanos
          </a>

        </div>
    
        <hr class="m-0" />
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php include ("footer.php"); ?>

  </body>
</html>