<h1>Tarea Funciones</h1>
<form action="tarea1.php" method="post">
  <p><label>Escriba una palabra:<label>
  <input type="text" name="palabra"></p>
  <p><input type="submit" name="enviar" value="Aceptar"</p>
</form>
<?php
  if(isset($_POST['enviar']))
  {
     $palabra = htmlentities($_POST['palabra']);
     if (strlen($palabra)>0 ){
     $resultado = es_palindroma($palabra);
   }
  }
    function es_palindroma($palabra)
  {
    if (strrev($palabra) == $palabra)
   {
    echo "La palabra es palíndroma.";
  } elseif(strrev($palabra) != $palabra)
   {
    echo "La palabra no es palíndroma.";

   }
}
 ?>
