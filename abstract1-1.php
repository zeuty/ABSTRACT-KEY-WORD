<?

//-----------------��������-----------------------------------------------------------------------------------------------------------------

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
	
	
	public function __construct($type){$this->type=$type;echo "<hr/>����������� ������ Automat ���������. �������  ' ".$this->type." ' ������.<hr/>";}
	
	public function destroy(){echo "<br/>��������� ����� ���� ���������� �� ������� ����������.<br/>";}
	public function shoot(){echo "<br/>�������������� �����.<br/>";}
	
	
	
	public function connect_magazin($mag){
		$this->connect_magazin=true; 
		$this->pri_mag_current_number=$mag->current_number;
		echo "<br/>������� �����������. ����������� �������� � ��������: ".$mag->current_number."<br/>";
	}
	
	public function boevoi_vzvod(){
		if($this->connect_magazin=false){ $this->boevoi_vzvod=false;
			echo"<br/>������� ���������� �������, � ����� ������, ��� �� �� �������� ��������???!!!<br/>";
		}else{
		    $this->boevoi_vzvod=true; 
			echo "<br/>������� ������� ,������ ������ � ���������.<br/>"; }
	}
	
	public function shoot_action(){
		//if($this->boevoi_vzvod=false){echo "<br/>��� �� �������� �������� �������� ������ � ���������???!!!<br/>";}
		//else{
                      for($p=1; $p<$pri_mag_current_number+1; $p++){
						  echo "<br/>".$p."  ��� !!!<br/>";
						  }
            //}
	}
	
	public function automat_status(){
		echo"<br/>---------��������� ��������-' ".$this->type." '--------<br/>";
		if($this->connect_magazin==false){echo "���� ��������;<br/>";}else{echo"<br/>������� �����������;<br/>";}
		If($this->boevoi_vzvod==false){echo"������� ���������, ������ �� ������;<br/>";}else{echo"<br/>������� �������, ������ � ����������;<br/>";}
		echo "<br/><br/><br/>";
		
	}
	
	
	
}

$akm_1 = new Automat ("���");
$akm_1->connect_magazin($magaz_1);
$akm_1->boevoi_vzvod();
$akm_1->automat_status();
$akm_1->shoot_action();






















class Pulemet extends Fire_fighting{
	public $type;
	public function __construct($type){$this->type=$type;echo "<hr/>����������� ������ Pulemet ���������. �������  ' ".$this->type." ' ������.<hr/>";}
	
	public function destroy(){echo "<br/>��������� ����� ����, ������������������ �������� � ������� ������� ����������.<br/>";}
	public function shoot(){echo "<br/>�����������(�������) ������������� �����.<br/>";}
}

$rpk_1 = new Pulemet("���");
















abstract class Magazin_K{
	abstract public function snarjazenie($number,$type);
}







class Magazin_AKM extends Magazin_K{
	private $max_number=30;
	private $current_number=0;
	private $type;
	
	public function __construct(){echo "<hr/>����������� ������ Magazin_AKM ���������. ������� ��� ���� ������.<hr/>";}
	
	
	public function snarjazenie($number,$type){
		if($number>30){echo "<br/>������� ��� �������� �� 30 ��������!!! ". $number-$this->max_number ." �������� ������ ( ������� ��� ������ �������� ) . <br/>";}
		else{$this->current_number=$number;$this->type=$type;echo "<br/>������� �������� ��������� ���� - '".$type." ' � ����������� - ' ".$number." '.<br/>";} 
		}
		
	public function get_info(){echo"<br/>---------��������� ��������---------<br/>
	                                     ����������� ��������: ".$this->max_number."<br/>
	                                     ������� ����������� �������� � ��������: ".$this->current_number."<br/>
										 ��� �������� � ��������: ".$this->type."<br/><br/>";} 
}
		
		$magaz_1 = new Magazin_AKM();
		$magaz_1->snarjazenie(25,"�������");
		$magaz_1->get_info();
	











//-----------------������ ������-----------------------------------------------------------------------------------------------------------------

abstract class Soldier{
	abstract public function use_weapon();
}

class Automatchik extends Soldier{
	public $name;
	public $name_automat;
	 
	
	public function __construct($name){$this->name=$name;echo "<hr/>����������� ������ ' Automatchik ' ���������. ���������� - ' ".$this->name." '  ������ !!!<hr/>";}
	
	public function use_weapon(){echo "<br/>�������<br/>";}
	
	public function shoot(Automat $type_automat){
		$this->name_automat = $type_automat->type;
		echo "<br/>���������� ".$this->name." ������� ��� ����������� �������������: ".$this->name_automat." .<br/>";}
}

$automatchik_1 = new Automatchik('������ �������� ���');
$automatchik_1->shoot($akm_1);



