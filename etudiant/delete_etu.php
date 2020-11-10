<?php  
require'db_etu.php';
$cne=$_GET['CNE'];
$sql='DELETE FROM etudiant WHERE CNE=$cne';
$statement=$connection->prepare($sql);
if($statement->execute([':cne'=>$cne])){
	
	header("location:index_etu.php");
	}

