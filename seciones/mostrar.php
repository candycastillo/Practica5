<html>
<head></head>
<body>


<?php 


$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['lName'] = $_POST['lName'];
$_SESSION['code'] = $_POST['code'];



if(empty($_SESSION['nombre']) && empty($_SESSION['lName']) && empty($_SESSION['code'])){ 
header('Location: nuevo.php');} 

else{
$nombre = $_POST['nombre'];
$apellido = $_POST['lName'];
$codigo = $_POST['code'];
    
echo "Nombre: ". $nombre; echo"</br>";echo"</br>";
echo "Apellido: ". $apellido; echo"</br>";echo"</br>";
echo"Codigo: ". $codigo; echo"</br>";echo"</br>";} 

echo"<a href= './cerrar.php'>   salir   </a> "; echo"</br>"; echo"</br>";


?>

</body>
</html>