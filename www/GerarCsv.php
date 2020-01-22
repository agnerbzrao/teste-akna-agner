<?php
class GerarCsv{
	/**
	 * Método gerador da planilha com os registro
	 */		
    public static function gerarPlanilha(string $nome,Array $dados){
        $fp = fopen($nome, 'w');
        fputcsv($fp, ['Mês','Categoria','Produto','Quantidade']);
    	foreach ($dados as $m=>$meses) {
			foreach($meses as $c=>$categoria){
				foreach($categoria as $p=>$produto){
					fputcsv($fp, [$m,$c,$p,$produto]);
				}
			}
    	}
        fclose($fp);
    }
}