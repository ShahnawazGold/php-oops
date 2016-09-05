<?php

class house{
	
	protected $name="shahnawaz khan";
	public  $age=26;

public  function  hello(){
	echo "hello world";	
}	

}
class door extends house{
	
	public  function  fullname(){
	return $this->name;	
}
	
}


$house=new house();
//echo $house->name;


$door=new door();

echo $door->fullname();


