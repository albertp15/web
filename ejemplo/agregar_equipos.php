<?php   
    require('conexion.php');


$fun = $_POST["funcion"];

switch ($fun) {
    case 'funedit': editar();
        break;
    case 'funregistrar': crear();
        break;
    case 'funelim': eliminar();
        break;
}
//variables de datos para enviar al servidor

$nombre = $_POST['nombre']; 
$fundacion = $_POST['fundacion'];
$logro = $_POST['logro'];
$mejor_jugador = $_POST['mejor_jugador'];
$estadio = $_POST['estadio'];
$id_deporte = $_POST['id_deporte'];
$id_ligas = $_POST['id_ligas'];
$logotipo = '';


//Metodo para guardar la ruta de las imagenes guardadas en una carpeta dentro del servidor

    if(isset ($_FILES["logotipo"]))
    {
        $file = $_FILES["logotipo"];

        $name = $file["name"];
        $tipo = $file["type"];
        $ruta_provisional = $file["tmp_name"];
        $size = $file["size"];
        $dimensiones = getimagesize ($ruta_provisional);
        $width = $dimensiones[0];
        $height = $dimensiones[1];
        $carpeta = "Imagenes/";
        if ($tipo != "image/jpg" && $tipo != "image/JPG" && $tipo != "image/jpeg" && $tipo != "image/png" && $tipo != "image/gif")
        {
            echo '<script language="javascript">alert("Error, el archivo no es una imagen");window.location="admin.php";</script>';        
        }
        else if ($size > 3*1024*1024){
            echo '<script language="javascript">alert("Error, el tamaño máximo permitido es 3mb");window.location="admin.php";</script>';        
           }
           else{
            $src = $carpeta.$name;
            move_uploaded_file($ruta_provisional, $src);
            $logotipo="Imagenes/".$name;          

          }
    }

//Subida de los datos a la BD, llenados en la Seccion "Equipo" del admin

     $query=mysqli_query($conexion, "INSERT INTO equipos (nombre,
      logotipo, fundacion, mejor_jugador, logro, estadio,  id_deporte, id_ligas) VALUES ('$nombre', '$logotipo', 
      '$fundacion', '$mejor_jugador', '$logro', '$estadio', '$id_deporte', '$id_ligas')");      

    if($query)
{
    echo '<script language="javascript">alert("Datos cargados exitosamente");window.location="admin.php";</script>';
}

else 
{
    echo '<script language="javascript">alert("¡ERROR!");window.location="admin.php";</script>';
}


function editar(){
    include_once("conexion.php");
    $nombre = $_POST['nombre']; 
    $fundacion = $_POST['fundacion'];
    $logro = $_POST['logro'];
    $mejor_jugador = $_POST['mejor_jugador'];
    $estadio = $_POST['estadio'];
    $id_deporte = $_POST['id_deporte'];
    $id_ligas = $_POST['id_ligas'];
    $logotipo = '';

    $editar = $sqlEdit = "UPDATE equipos SET nombre = 'nombre',
                                          logotipo = 'logotipo',
                                          fundacion = 'fundacion',
                                          logro = 'logro',
                                          mejor_jugador = 'mejor_jugador',
                                          estadio = 'estadio',
                                          id_deporte = 'id_deporte',
                                          id_ligas = 'id_ligas'
                                          WHERE id_equipo = 'id_equipo'";
    
    mysqli_query($conexion, $sqlEdit);

    if ($editar) {
        echo "<p class = 'text-success'>Se edito registro</p>";

    } else {
        echo "<p class = 'text-danger'>No Se edito registro</p>";
    }

}
mysqli_close($conexion);

?>