<?php
function  formatdate($date){
	
	return date ('F j,Y,g:i a', strtotime($date) );
}

?>