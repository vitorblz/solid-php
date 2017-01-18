<?php
class Pagamento{
	private $valor;
	private $meioPagamento; 

	public function __construct($valor, $mp){
		$this->valor = $valor;
		$this->meioPagamento  = $mp;
	}

	public function getValor(){
		return $this->valor;
	}
}