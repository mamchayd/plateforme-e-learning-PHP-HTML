<?php
	require'db_etu.php';
	$sql='SELECT * from etudiant';
		$statement=$connection->prepare($sql);
		$statement->execute();
		$etu=$statement->fetchAll(PDO::FETCH_OBJ);
	
	
	

?>



<?php require 'header_etu.php';?>
	<!--	<form action="" method="POST">
				<div class="form-group">
					<div>
						<span class="input-group-addon">Search</span>
						<input type="text" name="search" id="search" class="form-control" placeholder="search">
					</div>
				</div>
				<br/>
			</form>	-->
  <div class=" container">
	<div class="card mt-5"> 
	
		<div class="card-header">
		
			<h2> All etudiant</h2>
		
		</div>
		<div class="card-body">
		
			<table class="table table-bordered">
				<tr>
					<th>CNE</th>
					
					<th>nom</th>
					<th>prenom</th>
					<th>email</th>
					<th>filiere</th>
					<th>Mot de pass</th>
					<th>Action</th>
				
				</tr>
				<?php  foreach($etu as $person ): ?>
				<tr>
					<td><?= $person->CNE;?></td>
					
					<td><?= $person->nom_etu;?></td>
					<td><?= $person->prenom_etu;?></td>
					<td><?= $person->email_etu;?></td>
					<td><?= $person->id_filier;?></td>
					<td><?= $person->pass_etu;?></td>
					<td>
						<a href="edit_etu.php?CNE=<?= $person->CNE ?>" class="btn btn-info">Edit</a>
					<a onclick="return confirm('are you sure you want to delete this entry?')"href="delete_etu.php?CNE=<?= $person->CNE ?>"class="btn btn-info">delete</a>

					</td>

			
	
                                 
				
				</tr>
				<?php endforeach;?>
			</table>
		
		</div>
	</div>
  
  
  </div>
<?php require 'footer.php'?>
