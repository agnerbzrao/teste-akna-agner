<?php
class InserirMes{

	/**
	 * Método insere os registro na tabela mês no banco
	 */	
	public static function insereMes(PDO $con, Array $dados){
		$insert = "";
		foreach($dados as $a=>$dado){
			$insert.="INSERT INTO meses_ano (mes_id, mes) VALUES (NULL, '$a'); ";
		}
		try{
			$con->exec($insert);
		} catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
	}
}