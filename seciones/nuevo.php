<html>

<head><title>Nuevo</title></head>
<body>
<?php


echo"<form action='./mostrar.php' method='POST'>";
    
 echo" <label>Usuario nuevo</label>"; echo"</br>"; echo"</br>";
    
     echo"<label >Nombre</label>"; echo"</br>"; 
     echo"<input type= 'text'   size = '40'  maxlength = '255'  name = 'nombre'/>";   echo"</br>"; echo"</br>";
    
     echo"<label >Apellido</label>"; echo"</br>"; 
     echo"<input type= 'text'   size = '40'  maxlength = '255'  name = 'lName'/>";   echo"</br>";echo"</br>";
    
     echo"<label >codigo</label>"; echo"</br>"; 
     echo"<input type= 'text'   size = '40'  maxlength = '255'  name = 'code'/>";   echo"</br>"; echo"</br>";
    
     
echo" <input type='submit' value = 'ACEPTAR' />"; echo"<br/>"; echo"</br>";

//echo"<a href= './directorio.php'>   Regresar al menu principal   </a> "; echo"<br/>";  echo"<br/>";echo"</br>";
 echo"<a href= './sesion.php'>   Salir   </a> "; echo"<br/>"; echo"</br>"; 

echo"</form>"; 

?>
  
</body>
</html>