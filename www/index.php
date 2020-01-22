<pre>
<?php
require('AlinharArray.php');
include('GerarCsv.php');
include('model/ConectarBanco.php');
include('model/InserirMes.php');
include('model/InserirCategoria.php');
include('model/InserirProduto.php');


$lista = include 'lista-de-compras.php';

$resultado = AlinharArray::ordenarArray($lista);

$csv = GerarCsv::gerarPlanilha('compras-do-ano.csv', $resultado);

$conectar = ConectarBanco::conectar();
InserirMes::insereMes($conectar,$resultado);
InserirCategoria::insereCateg($conectar,$resultado);
InserirProduto::insereProduto($conectar,$resultado);



?></pre> 	