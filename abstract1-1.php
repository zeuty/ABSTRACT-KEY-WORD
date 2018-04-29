<?

//-----------------матчасть-----------------------------------------------------------------------------------------------------------------

abstract class Weapons{
	abstract public function destroy();
}

abstract class Fire_fighting extends Weapons{
	abstract public function shoot();
}















class Automat extends Fire_fighting{
	public $type;
	
	
	private $connect_magazin=false;
	private $boevoi_vzvod=false;
	private $pri_mag_current_number;
	
	
	public function __construct($type){$this->type=$type;echo "<hr/>Конструктор класса Automat отработал. Автомат  ' ".$this->type." ' создан.<hr/>";}
	
	public function destroy(){echo "<br/>Поражения живую силу противника на ближних дистанциях.<br/>";}
	public function shoot(){echo "<br/>Автоматическим огнем.<br/>";}
	
	
	
	public function connect_magazin($mag){
		$this->connect_magazin=true; 
		$this->pri_mag_current_number=$mag->current_number;
		echo "<br/>Магазин присоединен. Колличество патронов в магазине: ".$mag->current_number."<br/>";
	}
	
	public function boevoi_vzvod(){
		if($this->connect_magazin=false){ $this->boevoi_vzvod=false;
			echo"<br/>Сначала присоедини магазин, а потом взводи, что же ты собрался досылать???!!!<br/>";
		}else{
		    $this->boevoi_vzvod=true; 
			echo "<br/>Автомат взведен ,патрон дослан в патронник.<br/>"; }
	}
	
	public function shoot_action(){
		//if($this->boevoi_vzvod=false){echo "<br/>Как ты собрался стрелять недослав патрон в патронник???!!!<br/>";}
		//else{
                      for($p=1; $p<$pri_mag_current_number+1; $p++){
						  echo "<br/>".$p."  БАХ !!!<br/>";
						  }
            //}
	}
	
	public function automat_status(){
		echo"<br/>---------СОСТОЯНИЕ АВТОМАТА-' ".$this->type." '--------<br/>";
		if($this->connect_magazin==false){echo "Нету магазина;<br/>";}else{echo"<br/>Магазин присоединен;<br/>";}
		If($this->boevoi_vzvod==false){echo"Автомат невзведен, патрон не дослан;<br/>";}else{echo"<br/>Автомат взведен, патрон в патроннике;<br/>";}
		echo "<br/><br/><br/>";
		
	}
	
	
	
}

$akm_1 = new Automat ("АКМ");
$akm_1->connect_magazin($magaz_1);
$akm_1->boevoi_vzvod();
$akm_1->automat_status();
$akm_1->shoot_action();






















class Pulemet extends Fire_fighting{
	public $type;
	public function __construct($type){$this->type=$type;echo "<hr/>Конструктор класса Pulemet отработал. Пулемет  ' ".$this->type." ' создан.<hr/>";}
	
	public function destroy(){echo "<br/>Поражение живой силы, легкобронированных объектов и огневых средств противника.<br/>";}
	public function shoot(){echo "<br/>Интенсивным(плотным) автоматичеким огнем.<br/>";}
}

$rpk_1 = new Pulemet("РПК");
















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
		
	public function get_info(){echo"<br/>---------СОСТОЯНИЕ МАГАЗИНА---------<br/>
	                                     Вместимость магазина: ".$this->max_number."<br/>
	                                     Текущее колличество патронов в магазине: ".$this->current_number."<br/>
										 Тип патронов в магазине: ".$this->type."<br/><br/>";} 
}
		
		$magaz_1 = new Magazin_AKM();
		$magaz_1->snarjazenie(25,"трассер");
		$magaz_1->get_info();
	











//-----------------личный состав-----------------------------------------------------------------------------------------------------------------

abstract class Soldier{
	abstract public function use_weapon();
}

class Automatchik extends Soldier{
	public $name;
	public $name_automat;
	 
	
	public function __construct($name){$this->name=$name;echo "<hr/>Конструктор класса ' Automatchik ' отработал. Автоматчик - ' ".$this->name." '  создан !!!<hr/>";}
	
	public function use_weapon(){echo "<br/>Автомат<br/>";}
	
	public function shoot(Automat $type_automat){
		$this->name_automat = $type_automat->type;
		echo "<br/>Автоматчик ".$this->name." получил для дальнейшего использования: ".$this->name_automat." .<br/>";}
}

$automatchik_1 = new Automatchik('Джонни Бешенный Пес');
$automatchik_1->shoot($akm_1);



