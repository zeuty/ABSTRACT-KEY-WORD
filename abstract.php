<?


abstract class Mebelwood{
	public $material ="wood";
	public function opora(){echo "<br/>� '".$this->type." ', �������� ������� ����� (������������� ������� � ����������� ������ ' Mebelwood ' !!!)<br/>";}
	
	abstract public function create();
}


class Stul extends Mebelwood{
	public $type;
	
	public function __construct($t){$this->type=$t;echo"<hr/>� �����������, � ������ '".$this->type." ' !!!<hr/>";}   //echo"<br/>� ����������� � ������".$this->type."<br/>";
	
	public function create(){echo "<br/>���� ������ ������� ������!!!<br/>";}
	
	
}

$stul1 = new Stul("������������ ����");
$stul1->opora();
$stul1->create();


class Stol extends Mebelwood{
	public $type;
	
	public function __construct($t){$this->type=$t;echo"<hr/>� ����������� �� ������ Stol, � ������ '".$this->type." ' !!!<hr/>";}   //echo"<br/>� ����������� � ������".$this->type."<br/>";
	
	public function create(){echo "<br/>����, ' ".$this->type." ' ������ ������� ������!!! <br/>";}
	
	
}







$stol1 = new Stol("���������� ������");
$stol1->opora();
$stol1->create();
