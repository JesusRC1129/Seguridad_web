<?php

include('conexion.php');
 
$usuario = $_POST['user'];
$clave = $_POST['pass'];


$consulta = "SELECT * FROM usuario where usu_usu = '$usuario' and usu_con = '$clave'";
$resultado = mysqli_query($conn, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    header("Location:home.php");
}else {
    ?>
    <h1 class="card" style="width: 20rem; margin: 20px auto; padding: 10px;">Error, Usuario no existe</h1>
    <?php
    include('index.php');
    
}
mysqli_free_result($resultado);
mysqli_close($conn);

?>