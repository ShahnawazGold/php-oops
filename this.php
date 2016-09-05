<?Php


class hello{
	
	public $name="shahnawaz khan";
	public  $email="shahnawaz@yahoo.com";

public  function  user(){
	echo "name". $this->name."<br>email:".$this->email;
}	

}
$hello=new hello();
$hello->user();