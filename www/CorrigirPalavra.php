<?php
class CorrigirPalavra{
	/**
	 * Método corrige as palavras
	 */	    
    public static function corrigePalavra(string $frase){
        $dicionario = [
            'Brocolis'           => 'Brócolis',
            'Chocolate ao leit'  => 'Chocolate ao leite',
            'Enxaguante bocal'   => 'Enxaguante bucal',
            'Escova de dente'    => 'Escova de dente',
            'Geléria de morango' => 'Geléia de morango',
            'Papel Hignico'      => 'Papel higiênico',
            'Sabao em po'        => 'Sabão em pó'
        ];
    
        if(!array_key_exists($frase, $dicionario)){
            return $frase;
        }            
        return $dicionario[$frase];
    }
}