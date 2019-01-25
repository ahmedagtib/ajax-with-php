<?php
 include 'connect.php'; 
if(isset($_POST) && !empty($_POST)){
      $nom=htmlspecialchars(trim($_POST['name']));
      $prenom=htmlspecialchars(trim($_POST['prenom']));
      $email=htmlspecialchars(trim($_POST['email']));
      $tel=htmlspecialchars(trim($_POST['tel']));

      $qery="INSERT INTO conatct(name,prenom,email,tel) VALUES('$nom','$prenom','$email', '$tel')";
      $stmt=$con->prepare($qery);

      if($stmt->execute()){
          echo "<div class='alert alert-success'>add is done!!!</div>";   
      }else{
      	echo "error".mysqli_error($con);
      }

}

