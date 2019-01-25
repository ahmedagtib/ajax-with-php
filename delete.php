<?php
 include 'connect.php';
 
  $id=htmlspecialchars(trim($_POST['id']));
 
  $qery="DELETE FROM conatct WHERE id=? ";
   $stmt=$con->prepare($qery);
   if($stmt->execute(array($id))){
   	echo "<div class='alert alert-success'> delete Done !!</div>";
   }
 

                    
                