<?

interface Rozetca{
	
	public function geometrija(); 
}

interface Voltage{
	public function volti();
}


class Ussr implements Rozetca,Voltage{
	public $name;
	
	public function __construct($a){$this->name=$a;echo "<hr/>конструктор класса ' Ussr ' отработал!!!<hr/>";}
	
	public function volti(){echo "<br/>В розетках USSR - 220v <br/>";}
	public function geometrija(){echo "<br/>В розетках USSR - Два контакта на определенном удалении друг от друга <br/>";}
}


$e = new Ussr("розетка гост ссср");


$e->volti();
$e->geometrija();

// Проверяем интерфейсы в этой функции-------------------------------------------------------------------------------------------------------

function printt(Rozetca $a){echo "<br/>!!!свойство-Name , переданного в функцию объекта - ' ".$a->name." '<br/>";}
printt($e);

//-------------------------------------------------------------------------------------------------------------------------------------------


class Zeuty implements Rozetca{
	public $name;
	
	public function __construct($a){$this->name=$a;echo "<hr/>Конструктор класса Zeuty отработал!!!<hr/>";}
	public function geometrija(){echo "<br/>Розетка Zeuty изменяемого напряжения!!!<br/>";}
}

$zeuty = new Zeuty("Могилевская розетка");
printt($zeuty);



