<?

class Base{
	
	public static function who(){ echo __CLASS__."<br/>"; }
	
	public static function test(){
		self::who();   // self -  раннее связывание
		static::who(); // static - позднее статическое связывание - то что будет под статиком мы не знаем пока не вызовем на конкретном классе!!!
		               // он в себя получпет именно тот класс с которым идет работа в текущий момент!!
					   //  т е это можно сказать наследование статических свойств
	}
	
	
}

class Child extends Base{
		public static function who(){ echo __CLASS__."<br/>"; }
}



//echo Base::who();
//echo Child::who();
//echo Base::test();
echo Child::test();
