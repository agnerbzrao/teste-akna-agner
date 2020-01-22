<?php
class ConectarBanco{
	/**
	 * Método cria conexão com o banco
	 */
	public static function conectar(){
		try {
			$conn = new PDO("mysql:host=db;dbname=compras;charset=utf8", "root", "123456");
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conn;
		} catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
	}
}
