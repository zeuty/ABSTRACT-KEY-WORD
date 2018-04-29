<?


abstract class Mebelwood{
	public $material ="wood";
	public function opora(){echo "<br/>Я '".$this->type." ', реализую реакцию опоры (реализованным методом в абстрактном классе ' Mebelwood ' !!!)<br/>";}
	
	abstract public function create();
}


class Stul extends Mebelwood{
	public $type;
	
	public function __construct($t){$this->type=$t;echo"<hr/>Я конструктор, я создал '".$this->type." ' !!!<hr/>";}   //echo"<br/>Я конструктор я создал".$this->type."<br/>";
	
	public function create(){echo "<br/>Меня собрал сборщик мебели!!!<br/>";}
	
	
}

$stul1 = new Stul("Дизайнерский стул");
$stul1->opora();
$stul1->create();


class Stol extends Mebelwood{
	public $type;
	
	public function __construct($t){$this->type=$t;echo"<hr/>Я конструктор из класса Stol, я создал '".$this->type." ' !!!<hr/>";}   //echo"<br/>Я конструктор я создал".$this->type."<br/>";
	
	public function create(){echo "<br/>Меня, ' ".$this->type." ' собрал сборщик мебели!!! <br/>";}
	
	
}







$stol1 = new Stol("Французкий столик");
$stol1->opora();
$stol1->create();
