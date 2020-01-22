
<?php
class InserirProduto{

	/**
	 * Método insere os registro na tabela produto no banco
	 */	
	public static function insereProduto(PDO $con, Array $dados){
		$insert = "";
		foreach($dados as $a=>$dado){
			foreach($dado as $c=>$categoria){
				foreach($categoria as $p=>$produto){
					$insert.="INSERT INTO produto(prod_id,produto,quantidade,
							 mes_id, categ_id)
							VALUES (null, '$p',$produto,
							(SELECT mes_id FROM meses_ano WHERE mes = '$a'),
							(SELECT categ_id FROM categoria WHERE categoria = '$c'));";
				}
			}
		}
		try{
			$con->exec($insert);
		} catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
	}
}