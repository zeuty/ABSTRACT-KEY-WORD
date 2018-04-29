<?

trait Akm{
	public function akm(){echo "<br/>Автомат АКМ 7_62/39 (мм.)<br/>";}
}

trait Magazin_30{
	public function magazin(){echo "Магазин на 30 патронов (7.62/39 мм.)<br/>";}
}

class strelok_1{
	use Akm, Magazin_30;
	public function magazin(){echo "Магазин \"БУБЕН\" 70 ПАТРОНОВ (7.62/39 мм.)<br/>";}
}


class strelok_2 extends strelok_1{

	 
}

class strelok_3 extends strelok_2{
use Magazin_30;  // Требуется переопределить ссылку ( исспользование трейта) в дочеренем классе , чтобы обойти переопределенный метод в родительском классе!!!!
	public function magazin(){echo "Магазин РПК 45 ПАТРОНОВ (7.62/39 мм.)<br/>";} 
}

$s1 = new strelok_1;echo "strelok_1--- ";
$s1->magazin();

$s2 = new strelok_2;echo "strelok_2--- ";
$s2->magazin();

echo"<br/><br/><br/><i>---Требуется переопределить ссылку ( исспользование трейта) в дочеренем классе , чтобы обойти переопределенный метод трейта в родительском классе!!!!</i><br/>";

$s3 = new strelok_3;echo "strelok_3--- ";
$s3->magazin();