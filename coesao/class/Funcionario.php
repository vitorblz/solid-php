<?php

class Funcionario{

	private $id;
	private $nome;
	private $cargo;
	private $dataAdmisao;
	private $salario;

	public function __construct(Cargo $cargo, $salario){
		$this->cargo = $cargo;
		$this->salario = $salario;
	}

	public function getId(){
		return $this->id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function getCargo(){
		return $this->cargo;
	}

	public function getDataAdmissao(){
		return $this->dataAdmisao;
	}

	public function getSalario(){
		return $this->salario;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}
	
	public function setDataAdmissao($dataAdmisao){
		$this->dataAdmisao = $dataAdmisao;
	}

	public function calculaSalario()
	{
		return $this->getCargo()->getRegra()->calcula($this);
	}
}