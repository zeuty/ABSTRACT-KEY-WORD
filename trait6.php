<?

//Использование статических методов в трейте

trait Akm{
 private static $patron = "7-62/39 мм.";
 static function ogon(){echo "АКМ стреляет патронами  ". self::$patron ." .";}

}

class My_ak{
	use Akm;
	
}

$d = new My_ak;
$d->ogon();

echo "<br/>";
Akm::ogon();