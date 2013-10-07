<!DOCTYPE HTML>




<?php

session_start();

session_destroy();
?>

<html>
  <head>
<title>Inicio de sesi&oacute;n</title>
  </head>
  <body>
    
    <center>
      <h2 align =  >Validacion de usuario</h2>
      <form   action='./directorio.php' method='POST'>
      

      <label >Usuario</label>
      <input  type = "text" name = "usuario" size = "10" maxlength = "10"    /> <br/><br/>
      
      <label>Contrase&ntildea</label>
      <input type = "password" name = "clave" size = "10" maxlength = "10"    /> <br/><br/>
      
      <input type="submit" value = "ACEPTAR" />
    </form>
  </center>

  </body>
</html>
