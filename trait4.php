<?
//Трейты - Изменение области видимости методов из обьекта использующего ТРЕЙТ


trait Lg{
	public function lg(){return "<br/>Показываю картинку очень качественоо !!!! ОЧЕНЬ !!!<br/>";}
} 



	
class Custom_pc {
	use Lg{Lg::lg as privat;} // use похоже на require или include !!!!!!!!!!!!!!!!!!!!!
	// эта область видимоти изменилась только для этого класса и всех его дочерних классов
	public function zx(){echo $this->lg();}
}

$celeron333 = new Custom_pc;
$celeron333->zx();

 


//-----------------------------------------------

class Bn{
	use Lg;
}
$ccc = new Bn;
echo "<br/><br/><br/><br/>Я получил доступ из объекта ссс кдасса Bn".$ccc->lg();