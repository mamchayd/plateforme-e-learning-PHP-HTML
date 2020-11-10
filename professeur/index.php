<?php
	require'db.php';
	$sql='SELECT * from professeur';
		$statement=$connection->prepare($sql);
		$statement->execute();
		$prof=$statement->fetchAll(PDO::FETCH_OBJ);
	
	
	

?>



<?php require 'header.php';?> 

  <div class=" container">
	<div class="card mt-5"> 
	
		<div class="card-header">
		
			<h2> All professeur</h2>
		
		</div>
		
		<div class="card-body">
		
			<table class="table table-bordered">
				<tr>
					<th>matricul</th>
					<th>admin</th>
					<th>nom</th>
					<th>prenom</th>
					<th>email</th>
					<th>Action</th>
				
				</tr>
				<?php  foreach($prof as $person ): ?>
				<tr>
					<td><?= $person->matricul_prof;?></td>
					<td><?= $person->matricul_admin;?></td>
					<td><?= $person->nom_prof;?></td>
					<td><?= $person->prenom_prof;?></td>
					<td><?= $person->email_prof;?></td>
					<td>
						<a href="edit.php?matricul_prof=<?= $person->matricul_prof ?>" class="btn btn-info">Edit</a>
					<a onclick="return confirm('are you sure you want to delete this entry?')"href="delete.php?matricul_prof=<?= $person->matricul_prof ?>"class="btn btn-info">delete</a>

					</td>

			
	
                                 
				
				</tr>
				<?php endforeach;?>
			</table>
		
		</div>
	</div>
  
  
  </div>
<?php require 'footer.php'?>
