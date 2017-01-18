<?php

class EnviadorDeEmail implements AcaoAposGerarNota{

	public function executa(NotaFiscal $nf){
		echo "Nota enviada por email<br/>Valor da nota: {$nf->getValor()} <br/> <br/> ";
	}
}