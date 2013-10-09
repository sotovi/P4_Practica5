<?php 
session_start();
if(!isset($_SESSION['codigo'])){
	header('Location: Practica_login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
	<a href="Practica5_login.php"><h4>cerrar sesion</h4></a>
   <div>
<form method="post" action="Practica5_nuevo.php">

   <label for="txtNombre">Nueva Consulta</label><br/>

   
   <input type="submit" value="enviar" />

</form>

</div>      
 </body>
</html>