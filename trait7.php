<?
//������ � ��������� �������� ������ �� ������

trait X{
	function bbb(){echo "� �����, � ������ ��� ���� �������� �� �������� ������ \$gt, ���� ���:".$this->gt;}
}


class Zx{
	private $gt=777;
	use X;
	
}

$vb=new Zx;
$vb->bbb();