<?

// Позднее статическое связывание ключ-слово: static   !!!На примере фабрики объектов.

// Ключевое слово "self" работает только в контексте класса (внутри класса) .
// Им нельзя пользоваться как ключ-словом "this" (т.е. псевдопеременной $this) для дальнейшего 
// исаользования контента класса вызывающим контентом обьекта


abstract class DomainObject{
	public static function create(){
		return new static();
	}
}

class User extends DomainObject{
	
}


class Document extends DomainObject{
	
}


print_r(Document::create());