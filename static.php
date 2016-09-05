<?Php


class house{
	
	public static $name="shahnawaz khan";
	public static $faraz="faraz khan";
	public static $age=26;

public static function  hello(){
	return self::$faraz ;	
}	

}
class shop extends house{
	
	public function bye(){
		
		return parent ::$name ;
		
	}
}
echo shop::bye();

