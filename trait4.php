<?
//������ - ��������� ������� ��������� ������� �� ������� ������������� �����


trait Lg{
	public function lg(){return "<br/>��������� �������� ����� ����������� !!!! ����� !!!<br/>";}
} 



	
class Custom_pc {
	use Lg{Lg::lg as privat;} // use ������ �� require ��� include !!!!!!!!!!!!!!!!!!!!!
	// ��� ������� �������� ���������� ������ ��� ����� ������ � ���� ��� �������� �������
	public function zx(){echo $this->lg();}
}

$celeron333 = new Custom_pc;
$celeron333->zx();

 


//-----------------------------------------------

class Bn{
	use Lg;
}
$ccc = new Bn;
echo "<br/><br/><br/><br/>� ������� ������ �� ������� ��� ������ Bn".$ccc->lg();