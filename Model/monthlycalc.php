<?php

require_once("DBconnect.php");
$sql = "SELECT * FROM statement";
$result = mysqli_query($conn, $sql);
$total =0;

function sendcalculate(){

 
   require_once("DBconnect.php");
   
   $sql = "SELECT * FROM statement";
    $result = mysqli_query($conn, $sql);
    $total =0;
    if(mysqli_num_rows($result) != 0){
        while($row = mysqli_fetch_array($result)){
        

 if($row[3]=="January" && $row[5]==$row[6]){
 $total = $total + $row[1];
  }
 elseif($row[3]=="February" && $row[5]==$row[6]){
    $total = $total + $row[1];
    }
 elseif($row[3]=="March" && $row[5]==$row[6]){
        $total = $total + $row[1];
        }
 elseif($row[3]=="April" && $row[5]==$row[6]){
       $total = $total + $row[1];
        }
 elseif($row[3]=="May" && $row[5]==$row[6]){
        $total = $total + $row[1];
        }
 elseif($row[3]=="June" && $row[5]==$row[6]){
        $total = $total + $row[1];
        }   
 elseif($row[3]=="July" && $row[5]==$row[6]){
        $total = $total + $row[1];
        }    
 elseif($row[3]=="August" && $row[5]==$row[6]){
        $total = $total + $row[1];
        } 
 elseif($row[3]=="September" && $row[5]==$row[6]){
        $total = $total + $row[1];
        }
 elseif($row[3]=="October" && $row[5]==$row[6]){
        $total = $total + $row[1];
        }
 elseif($row[3]=="November" && $row[5]==$row[6]){
        $total = $total + $row[1];
        }
elseif($row[3]=="December" && $row[5]==$row[6]){
        $total = $total + $row[1];
        }
 }
 }
        
    
   return $total;

}

function receivecalculate(){
   require_once("DBconnect.php");
   $sql = "SELECT * FROM statement";
   $result = mysqli_query($conn, $sql);
	$total =0;
	if(mysqli_num_rows($result) != 0){
		while($row = mysqli_fetch_array($result)){
		     
 if($row[3]=="January" && $row[5]==$row[7]){
		$total = $total + $row[1];
		}

        elseif($row[3]=="February" && $row[5]==$row[7]){
            $total = $total + $row[1];
            }
         elseif($row[3]=="March" && $row[5]==$row[7]){
                $total = $total + $row[1];
                }
         elseif($row[3]=="April" && $row[5]==$row[7]){
               $total = $total + $row[1];
                }
         elseif($row[3]=="May" && $row[5]==$row[7]){
                $total = $total + $row[1];
                }
         elseif($row[3]=="June" && $row[5]==$row[7]){
                $total = $total + $row[1];
                }   
         elseif($row[3]=="July" && $row[5]==$row[7]){
                $total = $total + $row[1];
                }    
         elseif($row[3]=="August" && $row[5]==$row[7]){
                $total = $total + $row[1];
                } 
         elseif($row[3]=="September" && $row[5]==$row[7]){
                $total = $total + $row[1];
                }
         elseif($row[3]=="October" && $row[5]==$row[7]){
                $total = $total + $row[1];
                }
         elseif($row[3]=="November" && $row[5]==$row[7]){
                $total = $total + $row[1];
                }
        elseif($row[3]=="December" && $row[5]==$row[7]){
                $total = $total + $row[1];
                }       
						
    
    }
	 }
         return $total;
}
?> 