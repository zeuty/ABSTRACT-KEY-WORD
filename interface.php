<?

interface Rozetca{
	public function volt220();
}


class Euro implements Rozetca{
	public $type;
	
	public function __construct($a){$this->type=$a;echo "<hr/>����������� ��������� !!!<hr/>";}
	
	public function volt220(){echo "<br/>� ����������� � 220 ������� , ���������  �������������� ����������� �������������� ���� ���������� !!!<br/>";}
	
	
	
}

$roveuro1 = new Euro("������������ ������ 1");



function qqq(Rozetca $a){echo "<hr/>".$a->type." - ���������� Rozetca<hr/>";}
qqq($roveuro1);


class Cx{
	public $r;
	function __construct($r){$this->r=$r;echo "<hr/>����������� �������� Cx<hr/>";}
	}

$su = new Cx("������� �");
 






class Ussr implements Rozetca{
	public $type;
	
	public function __construct($a){$this->type=$a;echo "<hr/>����������� ������ Ussr ��������� !!!<hr/>";}
	
	public function volt220(){echo "<br/>� ����������� � 220 ������� , ���������  �������������� ����������� �������������� ���� ���������� !!!<br/>";}
}
$svet = new Ussr("������� �");
qqq($svet);

