<?



class Start{
	private $group;
	
	
	public           function    __construct() {$this->group = static::getGroup();}
	public static    function    create()      {return   new static();            }
	public static    function    getGroup()    {return   "Zeuty";               }                         
}

 

class User  extends Start {}

 

 print_r(User::create());

 