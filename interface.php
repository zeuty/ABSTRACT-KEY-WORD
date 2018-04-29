<?

interface Rozetca{
	public function volt220();
}


class Euro implements Rozetca{
	public $type;
	
	public function __construct($a){$this->type=$a;echo "<hr/>конструктор отработал !!!<hr/>";}
	
	public function volt220(){echo "<br/>Я подключился к 220 вольтам , благодаря  геометрическим парраметрам реализованного мною интерфейса !!!<br/>";}
	
	
	
}

$roveuro1 = new Euro("Дизайнерский штекер 1");



function qqq(Rozetca $a){echo "<hr/>".$a->type." - интерфейса Rozetca<hr/>";}
qqq($roveuro1);


class Cx{
	public $r;
	function __construct($r){$this->r=$r;echo "<hr/>Конмтруктор отработа Cx<hr/>";}
	}

$su = new Cx("Человек Х");
 






class Ussr implements Rozetca{
	public $type;
	
	public function __construct($a){$this->type=$a;echo "<hr/>конструктор класса Ussr отработал !!!<hr/>";}
	
	public function volt220(){echo "<br/>Я подключился к 220 вольтам , благодаря  геометрическим парраметрам реализованного мною интерфейса !!!<br/>";}
}
$svet = new Ussr("Человек Х");
qqq($svet);

