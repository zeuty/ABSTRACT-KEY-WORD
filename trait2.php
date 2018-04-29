<?
//Трейты - Разрешение одинаковых ИМЕН методов

trait Dunlop{
	//public $front_tyres="Dunlop 80/100-21";
	//public $back_tyres="Dunlop 110/90-19";
	public function front_tyres(){echo"Dunlop 80/100-21<br/>";}
	public function back_tyres(){echo"Dunlop 110/90-19<br/>";}
}

trait Michelin{
	//public $front_tyres="Michelin 80/100-21";
	//public $back_tyres="Michelin 110/90-19";
	public function front_tyres(){echo"Michelin 80/100-21<br/>";}
	public function back_tyres(){echo"Michelin 110/90-19<br/>";}
}

class Mytyres{
	use Dunlop,Michelin{
		Dunlop::front_tyres insteadof Michelin;
		Michelin::back_tyres insteadof Dunlop;
		//Dunlop::$front_tyres insteadof Michelin;
	}
}

$mytyres = new Mytyres;
$mytyres->front_tyres();
$mytyres->back_tyres();