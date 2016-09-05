<?php



class house{
	
	
	public  $name="shah";
	public $age=23;
	
	function hello(){
		
		echo"hello world";
	}
	function shah(){
		
		echo"shahnawez khan";
	}
}

$h=new house() ;
$g=new house() ;


echo $h->name."is".$h->age."year old";
echo $g->hello(). $g->shah();

