<?

//������������� ����������� ������� � ������

trait Akm{
 private static $patron = "7-62/39 ��.";
 static function ogon(){echo "��� �������� ���������  ". self::$patron ." .";}

}

class My_ak{
	use Akm;
	
}

$d = new My_ak;
$d->ogon();

echo "<br/>";
Akm::ogon();