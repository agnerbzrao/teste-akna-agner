<?php
class InserirCategoria{

	/**
	 * Método insere os registro na tabela mês no banco
	 */	
	public static function insereCateg(PDO $con, Array $dados){
		$arrayToInsert=[];
		$insert = "";
		foreach($dados as $dado){
			foreach($dado as $c=>$categoria){
				if (!in_array($c, $arrayToInsert)){
					$arrayToInsert[]= $c;
				}
			}
		}
		foreach($arrayToInsert as $values){
			$insert.="INSERT INTO categoria (categ_id, categoria)
			VALUES (NULL, '$values'); ";
		}
		
		try{
			$con->exec($insert);
		} catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
	}
}