<?php
require('CorrigirPalavra.php');	

class AlinharArray{

	/**
	 * Método organizador da lista de compra
	 */		
	public static function ordenarArray(array $lista)
	{
		$palavra = new CorrigirPalavra();
	
		$meses=[
			'janeiro','fevereiro','marco','abril',
			'maio','junho','julho','agosto',
			'setembro','outubro','novembro','dezembro'
		];
		uksort($lista, function($a,$b) use ($meses){
			$aMes = array_search($a, $meses);
			$bMes = array_search($b, $meses);
			return $aMes > $bMes;
		});
		foreach($lista as $x=>$linha){
			ksort($lista[$x]);
			foreach($linha as $y=>$ln){
				foreach($ln as $paK=>$valor){
					$resPa = $palavra::corrigePalavra($paK);
					if($paK<>$resPa){
						$lista[$x][$y][$resPa] = $ln[$paK];
						unset($lista[$x][$y][$paK]);
					}
				}
				arsort($lista[$x][$y]);

			}
		}
		return $lista;
	}
}