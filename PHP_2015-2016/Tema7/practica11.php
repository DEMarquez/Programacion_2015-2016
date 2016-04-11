<?php
class clase{

	public $factorial;
	

	function __construct($factorial){
		$this->factorial=$factorial;
		
	}

	public function calc(){
		$fact=1;
		for ($i=2; $i <= $this->factorial; $i++) { 
			$fact = $fact * $i;
			
		}	
		return $fact;
	}

}

$clase=new clase('5');
$res = $clase->calc();
echo $res;

?>