<?

interface Rozetca{
	
	public function geometrija(); 
}

interface Voltage{
	public function volti();
}


class Ussr implements Rozetca,Voltage{
	public $name;
	
	public function __construct($a){$this->name=$a;echo "<hr/>����������� ������ ' Ussr ' ���������!!!<hr/>";}
	
	public function volti(){echo "<br/>� �������� USSR - 220v <br/>";}
	public function geometrija(){echo "<br/>� �������� USSR - ��� �������� �� ������������ �������� ���� �� ����� <br/>";}
}


$e = new Ussr("������� ���� ����");


$e->volti();
$e->geometrija();

// ��������� ���������� � ���� �������-------------------------------------------------------------------------------------------------------

function printt(Rozetca $a){echo "<br/>!!!��������-Name , ����������� � ������� ������� - ' ".$a->name." '<br/>";}
printt($e);

//-------------------------------------------------------------------------------------------------------------------------------------------


class Zeuty implements Rozetca{
	public $name;
	
	public function __construct($a){$this->name=$a;echo "<hr/>����������� ������ Zeuty ���������!!!<hr/>";}
	public function geometrija(){echo "<br/>������� Zeuty ����������� ����������!!!<br/>";}
}

$zeuty = new Zeuty("����������� �������");
printt($zeuty);



