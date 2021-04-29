<?php

require_once('DBconnect.php');

if(isset($_POST['search'])){
	
	
	$sql = "SELECT * FROM statement ";
	 
  $result = mysqli_query($conn, $sql);
	 
	// if((mysqli_num)rows($result !=0)){
		if(mysqli_num_rows($result) !=0){

		  header("Location: statements.php");
	 }
	 else{
		 //echo " get out";
	 }
}

		 
?>	 