<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Login</title>
    <style>
        body{
        background-image: url("imagenes/fondo.jpg"); 
        background-repeat: no-repeat;
    }
    </style>    
</head>
<body>
<!-- Estructura del login para el ingreso del ADMIN -->
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <a href="index.php"><img src="imagenes/logo.png" class="w-50 p-3" alt=""></a>    <!--Logo header del Login -->

        <br><br><br>
        <div class="card">
            <div class="card-header bg-success text-white">
                <b>Inicio de Sesión</b>
            </div>
           
            <div class="card-body">
                
                    <form action="usuario.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Usuario:</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="user" name="usuario" required>
                            <div id="emailHelp" class="form-text">Ingrese su usuario con el cual se registro.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name="password" required>
                            <div id="emailHelp" class="form-text">Ingrese su contraseña de usuario.</div>
                        </div>

                        <button type="submit" class="btn btn-success">Entrar</button>
                    </form>
            </div>
        </div>
       
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
</body>
<footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</footer>
</html>