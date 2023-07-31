<?php
 /*  include('conexion.php');  //se trae la conexion realizada 
 
$USUARIO=$_POST['usuario'];  
$PASSWORD=$_POST['password'];
    
    $consulta = "SELECT* FROM Personal where usuario = '$USUARIO' and password = '$PASSWORD' "; //seleccion de la tabla un columnas de BD
    $resultado = mysqli_query($conexion,$consulta);

    $datos = mysql_fetch_assoc($resultado)
    $row = mysql_num_rows($resultado); 

    if ($row==1){

        $_SESSION['usuario']=$datos['usuario'];
        $_SESSION['id']=$datos['id'];

        header('location: admin.php')
    }
    else echo '<script language="javascript">alert("contraseña o usuario incorrecto");</script>';

    mysqli_free_result($resultado);


    /*if ($row_cnt) {
        header("location:admin.php");  //si es correcto el login, se redirecciona al admin

    }else{
        echo '<script language="javascript">alert("contraseña o usuario incorrecto");</script>';
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);*/
    
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','deportes') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM Personal WHERE usuario='" . $_POST["usuario"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["usuario"] = $row['usuario'];
        } else {

            header("location:login.php?error=1");
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:admin.php");
    }
?>

