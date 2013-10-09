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
<form method="post" action="Practica5_ver.php">

   <label for="txtNombre">Nombre</label><br/>
   <input type="text" size="40" maxlength="255"  name="txtNom"/>
   <br/>
   <br/>
   <label for="txtCorreo">Telefono</label><br/>
   <input type="text" size="40" maxlength="255"  name="txtTel"/>
   <br/>
   <br/>
  <label for="txtAsunto">Celular</label><br/>
   <input type="text" size="40" maxlength="255"  name="txtCel"/>
   <br/>
   <br/>
  <label for="txtAsunto">Domicilio</label><br/>
   <input type="text" size="40" maxlength="255" name="txtDom"/>
   <br/>
   <br/>
   
   <input type="submit" value="Guardar" />

</form>

</div>      
 </body>
</html>