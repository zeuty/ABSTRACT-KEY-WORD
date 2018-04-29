<?
//Доступ к свойствам БАЗОВОГО класса из трейта

trait X{
	function bbb(){echo "Я трейт, я достал для тебя свойство из базового класса \$gt, вото оно:".$this->gt;}
}


class Zx{
	private $gt=777;
	use X;
	
}

$vb=new Zx;
$vb->bbb();