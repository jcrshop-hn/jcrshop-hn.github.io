<?php
include('con_db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","login");

$consulta="SELECT*FROM  `usuarios editores` where Usuario='$usuario' and Contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:http://localhost/indexJcR/index.php");

}else{
    ?>
    <?php
    include("login.php");
    ?>
    <h1 class = "error"> Revise sus credenciales y intente de nuevo</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
