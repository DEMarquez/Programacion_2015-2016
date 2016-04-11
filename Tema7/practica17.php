<?php
class TicketMachine{

	public $price; //el precio del ticket de la máquina
	public $balance; //la cantidad de dinero que ha introducido el usuario hasta el momento
	public $total; //la cantidad total de dinero acumulada por la máquina con la venta de tickets
	

	function __construct($precioTicket){
		$this->price=$precioTicket;
		$this->balance=0;
		$this->total=0;
		
	}

	public function getPrice(){//dame el precio
		return $this->price;	
	}

	public function getTotal(){//dame el precio
		return $this->total;	
	}

	public function getBalance(){//dame la cantidad de dinero
								 //que ha introducido el
								 //usuario hasta ahora
		return $this->balance;	
	}

	public function insertMoney($amount){
		if($amount>0){
			$this->balance=$this->balance+$amount;
		}
	}

	public function printTicket(){
		if($this->balance>=$this->price){
			//puedo comprar el ticket
			//actualizo la cantidad de dinero que tiene el usuario
			$this->balance=$this->balance-$this->price;
			//actualizar el total de dinero de la maquina
			$this->total=$this->total+$this->price;
		}else{
			//no puedo comprar el ticket
			$falta=$this->price-$this->balance;
			echo  "faltan $falta euros <br>";
		}
	}	

	public function refundBalance(){
		return $this->balance;
	}
}

$maquina= new TicketMachine(5);

$maquina->insertMoney(2);
echo "He insertado: " . $maquina->getBalance() . " euros <br>";
$maquina->insertMoney(2);
echo "He insertado: " . $maquina->getBalance() . " euros <br>";
$maquina->insertMoney(2);
echo "He insertado: " . $maquina->getBalance() . " euros <br>";

echo "En la maquina hay " . $maquina->getTotal() . " euros <br>";
echo "Imprimir ticket <br>";
$maquina->printTicket();
echo "En la maquina hay " . $maquina->getTotal() . " euros <br>";
echo "El usuario tiene " . $maquina->getBalance() . " euros <br>";



?>