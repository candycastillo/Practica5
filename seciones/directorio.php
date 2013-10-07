
<html>
  <head>
   <title>Direct&oacute;rio</title>

  </head>
  <body>
    
<?php
    session_start();
    
$_SESSION['usuario'] = $_POST['usuario'];

$_SESSION['clave'] = $_POST['clave'];


    if(empty($_SESSION['usuario']) && empty($_SESSION['clave']) ) { 
header('Location: sesion.php');
} 

$pss = $_POST['clave'];
    $c="100"; 
     $c1="110"; 
     $c2="1"; 
     

    $user = $_POST['usuario'];
     $p = "udg"; 
     $p1 = "tonala"; 
     $p2 = "root"; 


if(($pss == $c && $user == $p)|| ($pss == $c1 && $user == $p1) || ($pss == $c2 && $user == $p2)){
    
echo"<center>";

echo "Bienvenido"; echo"</br>";
  

echo "Usuario:  ". $user; echo"</br>";

echo "Con contrasenia: ". $pss; echo"</br>"; 

echo"<a href= './nuevo.php'>   Para Ingresar nuevos datos   </a> ";  echo"</br>";



  echo"<a href= './sesion.php'>   regresar   </a> ";

 echo"<center>";

  }

else{    echo"Error en el nombre de usuario o la contrase&ntildea";   echo"</br>"; echo"</br>";

echo"<a href= './sesion.php'>   regresar   </a> ";

}

?>
  </body>
</html>
