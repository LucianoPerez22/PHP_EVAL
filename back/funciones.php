<?php
	
	require 'conexion.php';
		
	if (isset($_GET['fun'])) {
		$funcion=$_GET['fun'];
		$realizar=new Funciones();

		if ($funcion==1) {
			$realizar->alta();
		}


		if ($funcion==4) {
			$realizar->listar();
		}

		if ($funcion==5) {
			$realizar->listar_edit();
		}
	}

	if (isset($_POST['user'])) {
		$funcion=$_POST['fun'];
		$realizar=new Funciones();
		if ($funcion==2) {
			$realizar->editar();
		}

		if ($funcion==3) {
			$realizar->eliminar();
		}
	}

	
	class Funciones{
		function alta(){
			//Inicia Conexion a la BD
			$conn=conectar();

			$user= $_POST['usuario'];

			$query=mysqli_query($conn,"SELECT * FROM trabajo_final WHERE usuario='$user'");

			if (mysqli_num_rows($query) == 0) {
				//Obtendo los datos por POST
				$datos=$this->obtener_Datos();
						
				mysqli_query($conn, "INSERT INTO trabajo_final VALUES('$datos[0]','$datos[1]',
									'$datos[2]','$datos[3]',$datos[4],'$datos[5]','$datos[6]')");

				mysqli_close($conn);

				$destinatario=$datos[5]; 
				$asunto="Trabajo Integrador"; 
				$cuerpo='Gracias por registrarte!!!' . "\r\n" .  "\r\n" . 
						 'Tu usuario es: ' . $datos[0] . "\r\n" .
						 'Tu pass: ' . $datos[1] ; 
				
				$headers="From:bsoft2005@gmail.com" . "\r\n"; 
				$headers.="Reply-To: bsoft2005@gmail.com" . "\r\n"; 
				$headers.="MIME-Version: 1.0\r\n"; 
				$headers.="Content-type: text/html; charset=iso-8859-1\r\n"; 


				//Mail para el usuario
				mail($destinatario,$asunto,$cuerpo,$headers);

				header('Location: ../index.php');
			}else{
				mysqli_close($conn);
				header('Location: ../front/insertar_usuarios.php?error');

			}
		}
		

		function editar(){
			//Inicia Conexion a la BD
			$conn=conectar();

			//Obtendo los datos por POST
			$datos=$this->obtener_Datos();

			$user=$_POST['user'];
					
			mysqli_query($conn, "UPDATE trabajo_final SET usuario='$datos[0]',clave='$datos[1]',
														  nombre='$datos[2]',apellido='$datos[3]',
														  edad=$datos[4],email='$datos[5]',sitio_web='$datos[6]' 
														  WHERE usuario='$user'");

			mysqli_close($conn);


		}

		function eliminar(){
			//Inicia Conexion a la BD
			$conn=conectar();
			
			$user=$_POST['user'];
					
			mysqli_query($conn, "DELETE FROM trabajo_final WHERE usuario='$user'");

			mysqli_close($conn);
		}

		function listar(){
			//Inicia Conexion a la BD
			$conn=conectar();

			//Obtendo los datos por POST
					
			$consulta=mysqli_query($conn, "SELECT * FROM trabajo_final ORDER BY usuario");

			$resultado = array();
			while($r = mysqli_fetch_assoc($consulta)) {
			       $resultado[] = $r;
			}	
			mysqli_close($conn);

			echo json_encode($resultado);

		}

		function listar_edit(){
			//Inicia Conexion a la BD
			$conn=conectar();

			//Obtendo los datos por GET
			$user=$_GET['user'];
					
			$consulta=mysqli_query($conn, "SELECT * FROM trabajo_final WHERE usuario='$user'");

			$resultado = array();
			while($r = mysqli_fetch_assoc($consulta)) {
			       $resultado[] = $r;
			}	
			mysqli_close($conn);

			echo json_encode($resultado);

		}


		function obtener_Datos(){
			 $usuario=$_POST['usuario'];
			 $usuario=$this->validarDatos($usuario);

			 $clave=$_POST['clave'];
			 $clave=$this->validarDatos($clave);

			 $nombre=$_POST['nombre'];
			 $nombre=$this->validarDatos($nombre);

			 $apellido=$_POST['apellido'];
			 $apellido=$this->validarDatos($apellido);

			 $edad=$_POST['edad'];
			 $edad=$this->validarDatos($edad);

			 $email=$_POST['email'];
			 $email=$this->validarDatos($email);

			 $sitio_web=$_POST['sitio_web'];
			 $sitio_web=$this->validarDatos($sitio_web);

			$enviar=[$usuario,$clave,$nombre, $apellido,$edad,$email,$sitio_web];
			return $enviar;

		}

		function validarDatos($enviar){
			//Elimina espacios en blanco al principio y al final
			$enviar=trim($enviar);
			//Quita barras invertidas
			$enviar=stripcslashes($enviar);
			//Elimina caracteres especiales html
			$enviar=htmlspecialchars($enviar);

			//Devuelve datos limpios
			return $enviar;

		}
    }
?>