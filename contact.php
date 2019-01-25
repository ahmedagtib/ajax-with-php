<?php
 include 'connect.php';
 
  $id=htmlspecialchars(trim($_POST['id']));
 
  $qery="SELECT name,tel,email,prenom,id FROM conatct where id=?";
   $stmt=$con->prepare($qery);
   $stmt->execute(array($id));
   $count= $stmt->RowCount();
   if($count>0){
     $user=$stmt->fetchAll();  
    echo json_encode($user); 
   }
 

                    
                  