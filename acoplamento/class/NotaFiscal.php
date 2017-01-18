<?php 
class NotaFiscal {
	private $valor;
	private $impostoSobreValor;

	public function __construct($valor, $impostoSobreValor)
	{
		$this->valor = $valor;
		$this->impostoSobreValor = $impostoSobreValor;
	}

	public function getValor(){
		return $this->valor;
	}

}