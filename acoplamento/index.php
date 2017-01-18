<?php

function carregaClasse($classe){
	require "./class/{$classe}.php";
}

spl_autoload_register("carregaClasse");

$fatura = new Fatura(1000);

$gerador = new GeradorNotaFiscal();

$gerador->addAcao(new EnviadorDeEmail());
$gerador->addAcao(new NotaFiscalDao());

$gerador->gera($fatura);