<?php
try{
	$option=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',);
	$con=new PDO('mysql:host=localhost;dbname=ajax','root','',$option);
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
}
catch(PDOException $e){
	echo 'Failed To connect'.$e->getMessage();
}



?>