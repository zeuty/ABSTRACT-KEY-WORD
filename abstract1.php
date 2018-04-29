<?

abstract class Patron{
	//abstract public $calibr;
	
	abstract public function vistrel();
}


class calibr_7_62 extends Patron{
	public $calibr=7;
	public function vistrel(){echo "<br/>выстрел произведен 7.62 <br/>";}
} 

