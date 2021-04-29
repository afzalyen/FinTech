<?php
   require_once('DBconnect.php');
   session_start();
   
   if(isset($_POST['userid']) && isset($_POST['password'])){
      
      
      $myusername = mysqli_real_escape_string($conn,$_POST['userid']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM login WHERE userid = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
     
      
      $count = mysqli_num_rows($result);
      
     
		
      if($count == 1) {
       
         $_SESSION['userid'] = $myusername;
         
         header("location: index.php");
      }else {
          header("location: loginwrong.php");

      }
     
   }
?>