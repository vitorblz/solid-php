<?php

function carregaClasse($classe){
	require "./class/{$classe}.php";
}

spl_autoload_register("carregaClasse");


$funcionario = new Funcionario(new Desenvolvedor(new DezOuVintePorcento()),"3100");

$calculadora = new CalculadoraDeSalario();

echo $calculadora->calcula($funcionario);
