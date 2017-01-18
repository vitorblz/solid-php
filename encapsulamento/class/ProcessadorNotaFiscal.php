<?php
class ProcessadorNotaFiscal{
 
	public function processa(NotaFiscal $nf){

		$nf->calculaImposto();
		if($nf->getValorImposto() > 10000){
			$valor = 0.06 * $nf->getValor();
		}
		else{
			$valor = 0.12 * $nf->getValor();
		}
	}
}