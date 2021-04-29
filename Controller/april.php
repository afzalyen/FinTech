
<?php

?>

<html lang="en">
   <head>
        <meta charset="utf-8"/> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content="About the site"/>
		<meta name="author" content="Author name"/>
		<title>SENDQUICK</title>
	
			
	</head>	
  <body>
  <body  >
  <section id="header">
  <div class="row">
	             <div class="col-md-12" style="font-size: 100px; text-align: center; color:#8E0D2F;">SENDQUICK </div>
			</div>
			</br> <br/>
			<div class="row">
				 <div class="col-md-24" style="text-align: center; font-size: 20px; background:#DFAD10;">
	<button type="button" class="btn btn-primary" style="margin-left: 20px; color:#4d0039; background:#17A4E2">HOME</button>
<button type="button" class="btn btn-secondary"style="margin-left: 20px; color:#4d0039; background:#17A4E2">CASHOUT</button>
<button type="button" class="btn btn-success"style="margin-left: 20px; color:#4d0039; background:#17A4E2">SEND MONEY</button>
<button type="button" class="btn btn-danger"style="margin-left: 20px; color:#4d0039; background:#17A4E2">BALANCE</button>
<form action = "statement.php" class = "form_design" method="post">

<a href="statements.php" style="margin-left: 20px; color:#4d0039; background:#17A4E2">TRANSACTION</a>
</form>
<a href="logout.php" style="margin-left: 20px; color:#4d0039; background:#17A4E2" >LOGOUT </a>

</div>
			</div>		 
	   </section>
	   </br> <br/>
	   <section id "section1">
	   <div class ="row">
	   <div class="col-md-12" style="font-size: 40px; text-align: center; color:#1016EA;">Transaction of April 2020 </div>
		 <div class = "row" style ="padding:5px;">
				<table border height ="50px" width= "80%">
	             <tr>
				      <th width ="20%">Text </th>
					 <th width ="10%">Ammount </th>
					 <th width ="10%" >Date(YMD HMS)</th>
					  <th width ="10%">Month</th>
					 <th width ="10%">T N</th>
					 <th width ="10%">User ID</th>
					  <th width ="10%">Sender</th>
					  <th width ="10%">Receiver</th>
					 </tr> <br>
					</div> 
					 <?php
					 require_once("DBconnect.php");
					 $sql = "SELECT * FROM statement WHERE month= 'April' ORDER BY date DESC";
					 $result = mysqli_query($conn, $sql);
					 if(mysqli_num_rows($result) != 0){
						 while($row = mysqli_fetch_array($result)){
					?>
					<div class = "row" style ="padding:5px;">
				<table  border height ="50px" width= "80%">
	             <tr>
				      <td width="20%"> <?php echo $row[0]; ?> </td>
					 <td width ="10%"> <?php echo $row[1]; ?> </td>
					 <td width ="10%"> <?php echo $row[2]; ?> </td>
					  <td width ="10%"> <?php echo $row[3]; ?> </td>
					 <td width ="10%"> <?php echo $row[4]; ?></td>
					 <td width ="10%" > <?php echo $row[5]; ?></td>
					  <td width ="10%"> <?php echo $row[6]; ?></td>
					  <td width ="10%"> <?php echo $row[7]; ?></td>
					 </tr> <br>
					 </div>
					 
					
						 <?php
						 }
					 }
					 ?>
						 
						
					
					 
		</table>			 
	    </div> 
		 <div class "row" >
		   <div class="col-md-12" style="font-size: 30px; text-align: left; color:#1016EA;">You Send total ammount  </div>
		   <?php 
		  



		   
		    require_once("DBconnect.php");
					 $sql = "SELECT * FROM statement";
					 $result = mysqli_query($conn, $sql);
					 $total =0;
					 if(mysqli_num_rows($result) != 0){
						 while($row = mysqli_fetch_array($result)){
		     
		          if($row[3]=="April" && $row[5]==$row[6]){
				  $total = $total + $row[1];
				  }
						 }
					 }
					 ?>
					  <div class="col-md-12" style="font-size: 30px; text-align: left; color:#0F0402;"><?php echo $total; ?> Taka</div>
					 
					 
					  
		
		   
		   </div>
		    <div class "row" >
		   <div class="col-md-12" style="font-size: 30px; text-align: left; color:#1016EA;">You received total ammount  </div>
		   <?php 
		   






		   
		    require_once("DBconnect.php");
					 $sql = "SELECT * FROM statement";
					 $result = mysqli_query($conn, $sql);
					 $total =0;
					 if(mysqli_num_rows($result) != 0){
						 while($row = mysqli_fetch_array($result)){
		     
		          if($row[3]=="April" && $row[5]==$row[7]){
				  $total = $total + $row[1];
				  }
						 }
					 }
					 ?>
					  <div class="col-md-12" style="font-size: 30px; text-align: left; color:#0F0402;"><?php echo $total; ?> Taka  </div>
					  
		
		   
		   </div>
  </body>
  
  <section id="footer">
	   <div class ="row">
	        <div class="col-md-12" style="font-size: 60px; text-align: center; color:#1016EA;">Monthwise Summary</div>
			</div>
			</br> <br/>
			<div class="row" align=center>
				 <div class="col-md-24" style="text-align: cnter; font-size: 20px;">
				     <a href="january.php" style="color:#4d0039; background:#DFAD10"> JANUARY </a>
					 <a href="february.php" style="margin-left: 20px; color:#4d0039; background:#DFAD10"> FEBRUARY </a>
					 <a href="march.php" style="margin-left: 20px; color:#4d0039; background:#DFAD10"> MARCH </a>
					 <a href="april.php" style="margin-left: 20px; color:#4d0039; background:#DFAD10"> APRIL </a>
					 <a href="may.php" style="margin-left: 20px; color:#4d0039; background:#DFAD10"> MAY </a>
					 <a href="june.php" style="margin-left: 20px; color:#4d0039; background:#DFAD10"> JUNE </a>
					 <a href="july.php" style="margin-left: 20px; color:#4d0039; background:#DFAD10"> JULY </a>
					 <a href="august.php" style="margin-left: 20px; color:#4d0039; background:#DFAD10"> AUGUST</a>
					 <a href="september.php" style="margin-left: 20px; color:#4d0039; background:#DFAD10"> SEPTEMBER </a>
					 <a href="october.php" style="margin-left: 20px; color:#4d0039; background:#DFAD10"> OCTOBER </a>
					 <a href="november.php" style="margin-left: 20px; color:#4d0039; background:#DFAD10"> NOVEMBER </a>
					 <a href="december.php" style="margin-left: 20px; color:#4d0039; background:#DFAD10"> DECEMBER </a>
				 </div>
			</div>		 

	  </body>
      <body  >
	  <section id="footer">
	  <footer class="text-gray-600 body-font background:#025DA1 "> 
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
     
      <span class="ml-3 text-xl">SENDQUICK</span>
    </a>
    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">About Us
      <a href class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">Help Line</a>
    </p>
	</footer>
	<section>
	</body>
	  
	  
</html>
