<?

trait Akm{
	public function akm(){echo "<br/>������� ��� 7_62/39 (��.)<br/>";}
}

trait Magazin_30{
	public function magazin(){echo "������� �� 30 �������� (7.62/39 ��.)<br/>";}
}

class strelok_1{
	use Akm, Magazin_30;
	public function magazin(){echo "������� \"�����\" 70 �������� (7.62/39 ��.)<br/>";}
}


class strelok_2 extends strelok_1{

	 
}

class strelok_3 extends strelok_2{
use Magazin_30;  // ��������� �������������� ������ ( �������������� ������) � ��������� ������ , ����� ������ ���������������� ����� � ������������ ������!!!!
	public function magazin(){echo "������� ��� 45 �������� (7.62/39 ��.)<br/>";} 
}

$s1 = new strelok_1;echo "strelok_1--- ";
$s1->magazin();

$s2 = new strelok_2;echo "strelok_2--- ";
$s2->magazin();

echo"<br/><br/><br/><i>---��������� �������������� ������ ( �������������� ������) � ��������� ������ , ����� ������ ���������������� ����� ������ � ������������ ������!!!!</i><br/>";

$s3 = new strelok_3;echo "strelok_3--- ";
$s3->magazin();