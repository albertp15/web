<?php
//llamar la conexion
require_once('conexion.php');
//conectar a la base de datos escuela con mysqli
//$con = mysqli_connect($hostname_escuela, $username_escuela, $password_escuela, $database_escuela);
//comprobar la conexion
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<!-- crear un formulario para editar registros en la tabla alumnos -->
<form action="editar.php" method="post">
    <?php
    // consultar un registro de la tabla alumnos
    $query = "SELECT * FROM equipos WHERE id_equipo = " . $_REQUEST['id_equipo'];
    //ejecutar la consulta
    $result = mysqli_query($conexion, $query);
    //recorrer el resultado de la consulta
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre']; ?>">
        <br>
        <label for="apellido">Fundación:</label>
        <input type="text" name="fundacion" id="apellido" value="<?php echo $row['fundacion']; ?>">
        <br>
        <label for="edad">Logro:</label>
        <input type="text" name="logro" id="edad" value="<?php echo $row['logro']; ?>">
        <input type="hidden" name="id_equipo" id="id" value="<?php echo $_REQUEST['id_equipo']; ?>">
        <br>
        <input type="submit" value="Guardar" name="guardar">
        <?php
        }
        ?>
</form>
<?php
// validar que el formulario se ha enviado
if ( isset( $_REQUEST['guardar'])) {
    //crear la consulta
    $query = "UPDATE equipos SET nombre='" . $_POST['nombre'] . "', fundacion='" . $_POST['fundacion'] . "', logro='" . $_POST['logro'] . "' WHERE id_equipo=" . $_REQUEST['id_equipo'];
    //ejecutar la consulta
    $result = mysqli_query($conexion, $query);
    //comprobar el resultado de la consulta
    if ($result) {
        echo "Registro editado correctamente";
        //redireccionar a la pagina principal
        header('Location: index.php');
    } else {
        echo "Error al editar el registro";
    }
}
//cerrar la conexion
mysqli_close($con);
?>