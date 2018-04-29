<?

trait Brakes{
		public $brakes="Nissin";
}

trait Suspension{
		public $suspension="Showa";
}

class Crf{
	use Brakes,Suspension;
}



$crf450 =new Crf;
echo $crf450->brakes."<br/>";
echo $crf450->suspension."<br/>";
