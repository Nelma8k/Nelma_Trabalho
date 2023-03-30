<?php

		$host = "localhost";
		$dbname = "crud";
		$username = "root";
		$password = "";
		
		
	    //MYSQLI;
		$conectar = mysqli_connect($host,$username,$password,$dbname) or die ("Erro na conexão");
		
		
		// PHP PDO CRUD
		
	/*
		try {
			$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo "Erro na conexão: " . $e->getMessage();
			die();
		}
	*/
		
?>

