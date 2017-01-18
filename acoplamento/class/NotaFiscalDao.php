<?php

class NotaFiscalDao implements AcaoAposGerarNota{

	public function executa(NotaFiscal $nf){
		echo "Persiste Nota Fiscal<br/>";
	}
}