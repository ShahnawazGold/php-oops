<?php



class house{
	
	
	public static $name="shah";
	public static $name1="shah";
	public $age=23;
	
	public static function hello(){
		
		return  self::$namm1;
	}

	
}
class door extends house{
	public function bye(){
		
		return parent ::$name;
	}
	
}

//$h=new house() ;



//echo $h->name;
echo door :: bye() ;


