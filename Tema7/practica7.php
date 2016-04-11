<?php
	class NIF{
		
		public $dni;
		public $letra;
		
		public function __construct($dni){
			if (strlen($dni)==8) {
				$this->dni=$dni;
				$this->calcularLetra();
			}else{
				echo "error en el DNI";
			}
		}

		public function getDni(){
			return $this->dni;
		}

		public function getNif(){
			/*$letra=$this->letra;
			$nif=$this->dni+$letra;*/
			return $this->dni . "-" . $this->letra;
		}

		public function mostrar(){
			echo $this->dni . "-" . $this->letra;
		}

		private function calcularLetra(){
			$resto=$this->dni%23;
			
			switch ($resto) {
				case '0':
					$this->letra='T';
					break;
				case '1':
					$this->letra='R';
					break;
				
				case '2':
					$this->letra='W';
					break;
				
				case '3':
					$this->letra='A';
					break;
				
				case '4':
					$this->letra='G';
					break;
				
				case '5':
					$this->letra='M';
					break;
				
				case '6':
					$this->letra='Y';
					break;
				
				case '7':
					$this->letra='F';
					break;

				case '8':
					$this->letra='P';
					break;

				case '9':
					$this->letra='D';
					break;

				case '10':
					$this->letra='X';
					break;

				case '11':
					$this->letra='B';
					break;

				case '12':
					$this->letra='N';
					break;

				case '13':
					$this->letra='J';
					break;

				case '14':
					$this->letra='Z';
					break;
				
				case '15':
					$this->letra='S';
					break;

				case '16':
					$this->letra='Q';
					break;

				case '17':
					$this->letra='V';
					break;

				case '18':
					$this->letra='H';
					break;

				case '19':
					$this->letra='L';
					break;
				
				case '20':
					$this->letra='C';
					break;		
				
				case '21':
					$this->letra='K';
					break;

				case '22':
					$this->letra='E';
					break;	
				
				default:
					$this->letra="p";
			}
		}
	}

$dni="18563489";
$miNIF=new NIF($dni);
$nif=$miNIF->getNif();
echo "$nif";	
?>