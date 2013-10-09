<?php 
session_start();
if(!isset($_SESSION['codigo'])){
	header('Location: Practica5_login.php');
}
?>
<!DOCTYPE HTML>
<html>
  <head>
  </head>
  <body>
    <h2>Datos</h2>
	<a href="Practica5_login.php"><h4>cerrar sesion</h4></a>
<?php
    // obtiene los datos de entrada del formulario
    $Nom = $_POST['txtNom'];
    $Tel = $_POST['txtTel'];
	$Cel = $_POST['txtCel'];
	$Dom = $_POST['txtDom'];
    // utiliza los datos de entrada del formulario
	
	echo "Nombre: ".$Nom."<br />";
	echo "Telefono: ".$Tel."<br />";
	echo "Celular: ".$Cel."<br />";
	echo "Domicilio: ".$Dom."<br />";
    
    ?>
</body>
</html>