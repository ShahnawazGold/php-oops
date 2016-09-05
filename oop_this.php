<?php



class hello{
	
	
	public  $name="shahnawaz";
	public  $name1="shah";
	public $age=23;
	
	public  function user(){
		
		echo $this->name."<br>".$this->age;
	}

	
}


$h=new hello() ;

$h->user();

//echo $h->name;



