<?Php


class house{
	
	public $name="shahnawaz khan";
	public  $age=26;

public  function  hello(){
	echo "hello world";	
}	

}
$h=new house();
$g=new house();

echo $h->name ."is" .$h->age . "year old";

echo $g->hello();