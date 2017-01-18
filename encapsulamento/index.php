<?php

function carregaClasse($classe){
	require "./class/{$classe}.php";
}

spl_autoload_register("carregaClasse");


$boletos[] = new Boleto(300);
$boletos[] = new Boleto(200);

$fatura = new Fatura("Vitor", 600);

$processadorBoletos = new ProcessadorDeBoletos();

if($processadorBoletos->processa($boletos, $fatura))
	echo "Fatura Paga";
else
	echo "Fatura não paga";