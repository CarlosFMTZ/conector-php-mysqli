<?php 
	function Conectarse(){
		if(!($link = mysqli_connect("localhost","root","password"))){
			echo "Error conectando a la base de datos";
			exit();
		}	
		if(!mysqli_select_db($link,"base de datos")){
			echo "Error al seleccionar la base de datos";
			exit();
		}

		return $link;
	}
 ?>	