<?

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
		
	public function get_info(){echo"<br/>����������� ��������: ".$this->max_number."<br/>
	                                     ������� ����������� �������� � ��������: ".$this->current_number."<br/>
										 ��� �������� � ��������: ".$this->type;} 
}
		
		$magaz_1 = new Magazin_AKM();
		$magaz_1->snarjazenie(25,"�������");
		$magaz_1->get_info();
	