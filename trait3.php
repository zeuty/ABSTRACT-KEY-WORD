<?
//Трейты - Назначение ПСЕВДОНИМОВ методам

trait Dunlop{
	 
	public function front_tyres(){echo"-псевдоним назначен-------------------Dunlop 80/100-21<br/>";}
	public function back_tyres(){echo"-псевдоним назначен--------------------Dunlop 110/90-19<br/>";}
}

trait Michelin{
 
	public function front_tyres(){echo"-псевдоним назначен--------------------Michelin 80/100-21<br/>";}
	public function back_tyres(){echo"-псевдоним назначен--------------------Michelin 110/90-19<br/>";}
}

class Mytyres{
	use Dunlop,Michelin{
		
		Dunlop::front_tyres insteadof Michelin;
		Michelin::back_tyres insteadof Dunlop;
		
		Dunlop::back_tyres as no_my_back_tyres;
		
		Michelin::front_tyres as no_my_front_tyre1;
		
		
	}
}

$mytyr = new Mytyres;
$mytyr->no_my_back_tyres();
$mytyr->no_my_front_tyre1();