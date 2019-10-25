<?php
    // XAMPP 
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "sistema_cursos";
	$dsn = "mysql:host={$host};port=3306;dbname={$banco}";
	try {
		$pdo = new PDO($dsn, $usuario, $senha);
	} catch (PDOException $e){
		die($e->getMessage());
    }
    
    // MAMPP 
	// $host = "localhost";
	// $usuario = "root";
	// $senha = "root";
	// $banco = "sistema_cursos";
	// $dsn = "mysql:host={$host};port=8889;dbname={$banco}";
	// try {
	// 	$pdo = new PDO($dsn, $usuario, $senha);
	// } catch (PDOException $e){
	// 	die($e->getMessage());
	// }
?>