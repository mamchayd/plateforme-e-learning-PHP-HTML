<?php
require'db_etu.php';
$output='';
$sql='SELECT * from etudiant WHERE  CNE=".$post["search"]."';
		$result=mysqli_query($connection,$sql);
		if(mysqli_num_rows($result>0){
			$output.='<h4 align="center">search Result</h4>';
			$output.='<div class="table-reponsive">
						<table class="table table-bordered">
						<tr>
							<th>CNE</th>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Email</th>
							<th>filiere</th>
						</tr>';
			while($row=mysqli_fetch_array($result)){
				$output.='
				<tr>
			<td>'.$row["CNE"].'</td>
			<td>'.$row["nom_etu"].'</td>
			<td>'.$row["prenom_etu"].'</td>
			<td>'.$row["email_etu"].'</td>
			<td>'.$row["id_filier"].'</td>
				
				</tr>';
				
			}
			echo $output;
			
		}else{
			
			echo 'data not found';
			
		}
	
	

?>