<?php



class house{
	
	
	protected  $name="shah";
	protected $age=23;
	public  $bro=27;
	public function hello(){
		
		echo"hello world";
	}
	
}
//yeh  dosri clss hay inhertance
class door extends house{
	public function fullname(){
		
		return $this->name.$this->age;
	}
	
}

$h=new house() ;
$g=new door() ;


echo $g->fullname();
echo $h->bro;

