<?php








$this->error ="connection failed ".this->links->connect_error ;


public  function  select ($query){
	
	$result=$this->link->query($query);
	
	if($result->num_rows>0){
		return $result;
		
	}
}


	public  function insert ($query){
	
	$insert=$this->link->query($query);
	
	if($insert){
		
		header('location:indux.php?insert= Post inserted...');
	}else{
		echo"did  not insert";
	}
}


	public  function update ($query){
	
	$update=$this->link->query($query);
	
	if($update){
		
		header('location:indux.php?insert= Post updated...');
	}else{
		echo"did  not update";
	}
}
<a class="readmore" href="single.php?id=<?php echo $row ['id']; ?>">Read More</a>

	public  function delete($query){
	
	$delete=$this->links->query($query);
	
	if($delete){
		
		header('location:indux.php?insert= Post deleted...');
	}else{
		echo"did  not delete";
	}
}
?>