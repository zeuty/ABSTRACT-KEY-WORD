<?

abstract class Magazin_K{
	abstract public function snarjazenie($number,$type);
}

class Magazin_AKM extends Magazin_K{
	private $max_number=30;
	private $current_number=0;
	private $type;
	
	public function __construct(){echo "<hr/>Конструктор класса Magazin_AKM отработал. Магазин для АКМа создан.<hr/>";}
	
	
	public function snarjazenie($number,$type){
		if($number>30){echo "<br/>Магазин АКМ расчитан на 30 патронов!!! ". $number-$this->max_number ." патронов лишних ( наполни ими другие магазины ) . <br/>";}
		else{$this->current_number=$number;$this->type=$type;echo "<br/>Магазин снаряжен патронами типа - '".$type." ' в колличестве - ' ".$number." '.<br/>";} 
		}
		
	public function get_info(){echo"<br/>Вместимость магазина: ".$this->max_number."<br/>
	                                     Текущее колличество патронов в магазине: ".$this->current_number."<br/>
										 Тип патронов в магазине: ".$this->type;} 
}
		
		$magaz_1 = new Magazin_AKM();
		$magaz_1->snarjazenie(25,"трассер");
		$magaz_1->get_info();
	