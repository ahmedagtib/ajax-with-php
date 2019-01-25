<?php
 include 'connect.php'; 
  $qery="SELECT * FROM conatct";
   $stmt=$con->prepare($qery);
   $stmt->execute();
   $rows=$stmt->fetchALL();
   $count=$stmt->rowCount();

   if($count > 0){
    foreach ($rows as $row) {
    	echo "<tr>";
    	echo "<td>".$row['name']."</td>";
    	echo "<td>".$row['prenom']."</td>";
    	echo "<td>".$row['email']."</td>";
    	echo "<td>".$row['tel']."</td>";
    	echo '<td><a  onclick="getuser('.$row['id'].')" class="btn btn-warning" tex-white>update</a></td>';
      echo '<td><a  onclick="deletuser('.$row['id'].')" class="btn btn-danger" tex-white>danger</a></td>';        
    	echo "</tr>";
    }
   }
   else{
   	return false;
   }