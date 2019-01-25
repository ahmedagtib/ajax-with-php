<?php
 include 'connect.php'; 
if(isset($_POST) && !empty($_POST)){
      $id=htmlspecialchars(trim($_POST['id']));
       $nom=htmlspecialchars(trim($_POST['name']));
      $prenom=htmlspecialchars(trim($_POST['prenom']));
      $email=htmlspecialchars(trim($_POST['email']));
      $tel=htmlspecialchars(trim($_POST['tel']));
      

      $qery="UPDATE  conatct SET name=?,prenom=?,email=?,tel=? WHERE id=?";
      $stmt=$con->prepare($qery);

      if($stmt->execute(array($nom, $prenom,$email,$tel,$id))){
          echo "<div class='alert alert-success'>update is done!!!</div>";   
      }else{
      	echo "error".mysqli_error($con);
      }

}

