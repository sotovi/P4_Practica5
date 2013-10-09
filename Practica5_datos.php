<html>
  <head>
  
  
  </head>
  <body>
    
<?php
    // obtiene los datos de entrada del formulario
    $Codigo = $_POST['txtCodigo'];
    $Pass = $_POST['txtPass'];
    // utiliza los datos de entrada del formulario
   
	
	if(($Codigo == 100 && $Pass == "udg") ||
		($Codigo == 110 && $Pass == "tonala")){
		session_start();
		$_SESSION["codigo"] = $Codigo;
		$_SESSION["pass"] = $Pass;
		
	header('Location: Practica5_panel.php');
	}else{
	
	header('Location: Practica5_login.php');
	
	}
    ?>
	

	
</body>
</html