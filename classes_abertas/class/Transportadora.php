<?php
class Transportadora implements ServicoDeEntrega{
	public function para($cidade){

		if(strtoupper($cidade) == "SAO PAULO") {
		    return 5;
		}

		return 10;
	}
}