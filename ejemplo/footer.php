<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!--    FontAwesome  -->
  <script src="https://kit.fontawesome.com/bf905fd10a.js" crossorigin="anonymous"></script>
  </head>
  <style>
      #sin_subrayado{
        text-decoration: none;
        color: #005c1c;
      }
      #sin_subrayado:hover {
        color: #008f2b;
        cursor: pointer;
      }
      #sn_subrayado{
        text-decoration: none;
        color: #00222b;
      }
      #sn_subrayado:hover {
        color: #008f2b;
        cursor: pointer;
      }
      #rdsc {
        text-decoration: none;
      }
      #rdsc:hover {
        color: #008f2b;
        cursor: pointer;
      }
    </style>
  <body>

  <footer>
      <div class="container-fluid bg-secondary text-dark bg-opacity-25">
        <div class="row px-5 pt-4">
          <div class="col-sm-4 text-center">
            <a href="index.php"><img src="Imagenes/logo.png" alt="" id="logo"></a>
            <h6 class="titulo mt-2">Sitio Web para la promoción de equipos deportivos de ligas internacionales</h6>
          </div>
          <div class="col-sm-8">
            <div class="row">
              <div class="col-4 col-sm-4">
                <li>
                  <a class="fs-5" href="index.php" id="sin_subrayado">Inicio</a>
                </li>
                <li>
                  <a class="fs-5" href="equipos.php" id="sin_subrayado">Equipos</a>
                </li>
                <li>
                  <a class="fs-5" href="ligas.php" id="sin_subrayado">Ligas</a>
                </li>
              </div>         
              <div class="col-4 col-sm-4 ">
                <li>
                  <a class="text-center fs-5" id="sin_subrayado" href="categorias.php">Categorias</a>
                  <div class= "text-dark-emphasis">
                  &nbsp;&nbsp;   →  <a id="sn_subrayado" href="futbol.php"> Futbol</a>
                  </div>
                  <div>
                  &nbsp;&nbsp;   →  <a href="baloncesto.php" id="sn_subrayado"> Baloncesto</a>
                  </div>
                  <div>
                  &nbsp;&nbsp;   →  <a href="beisbol.php" id="sn_subrayado"> Beisbol</a>
                  </div>
                  <div>
                  &nbsp;&nbsp;   →  <a href="futbol_americano.php" id="sn_subrayado"> Futbol Americano</a>
                  </div>
                        <!-- jQuery first, then Popper.js, then Bootstrap JS
 <li class="mt-1" type="circle"> 
                      <a href="futbol.php" class="text-primary text-opacity-75">Futbol</a>
                    </li>
                    <li class="mt-1" type="circle"> 
                      <a href="baloncesto.php"class="text-primary text-opacity-75">Baloncesto</a>
                    </li>
                    <li class="mt-1" type="circle"> 
                      <a href="beisbol.php"class="text-primary text-opacity-75">Beisbol</a>
                    </li>
                    <li class="mt-1" type="circle"> 
                      <a href="futbol_americano.php"class="text-primary text-opacity-75">Futbol Americano</a>
                    </li>
                </li> -->

              </div>         
              <div class="col-4 col-sm-4 text-dark">
                <li class="text-dark">
                  <a class="fs-5" id="sin_subrayado" href="blog.php">Blog</a>
                </li>         
                <li class="mt-1">
                  <a class="fs-5" id="sin_subrayado" href="contacto.php">Contacto</a>
                </li><br>
                <div class="rrss text-center">
                <b><span class="fs-5 ">Redes Sociales</span></b> <br>
                </div>
                <div class="rdsc text-center mt-2">
                <a href=""><i class="fa-brands fa-facebook fa-xl" title="Facebook" style="color: #006113;"></i></a>&nbsp;&nbsp; <a href=""><i class="fa-brands fa-twitter fa-xl" title="Twitter" style="color: #006113;"></i></a>&nbsp;&nbsp; <a href=""><i class="fa-brands fa-instagram fa-xl" title="Instagram" style="color: #006113;"></i></a>
                </div>
              </div>         
            </div>                      
          </div>
        </div>  <br>
        <div class="row text-center pb-2">
          <div class="col">
            Copyright © 2023 INFOSPORT
          </div>
        </div>  
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
