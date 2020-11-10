<?php  
require'db.php';
$matricul=$_GET['matricul_prof'];
$sql='DELETE FROM professeur WHERE matricul_prof=$matricul';
$statement=$connection->prepare($sql);
if($statement->execute([':matricul'=>$matricul])){
	
			header("location:index.php");
	}

