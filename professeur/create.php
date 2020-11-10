<?php
	require'db.php';
	$message='';
	if(isset($_POST['matricul'])&&isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['admin']) && isset($_POST['email']) ){
		$matricul=$_POST['matricul'];
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$admin=$_POST['admin'];
		$email=$_POST['email'];
		$sql='INSERT INTO professeur(matricul_prof,matricul_admin,nom_prof,prenom_prof,email_prof) values(:matricul,:admin,:nom,:prenom,:email)';
		$connection->prepare($sql);
		$statement=$connection->prepare($sql);
		if($statement->execute([':matricul'=>$matricul,':admin'=>$admin,'nom'=>$nom,'prenom'=>$prenom,'email'=>$email]) ){
			
			$message='data inserted avec sucss';
		}
	
	}

?>



<?php require 'header.php';?>
  
 <div class="container">
	<div class="card mr-5">
		<div class="card-header">
		<h2> create a personne</h2>
		</div> 
		<div class="card-body">
		<?php if(!empty($message)):?>
		<div class="alert alert-success">
			<?= $message; ?>
		
		</div>
		
		<?php endif?>
			<form action="" method="POST">
				<div class="form-group">
					<label for="matricul">matricul</label>
					<input type="text" name="matricul" id="matricul" class="form-control">
				</div>
				<div class="form-group">
					<label for="admin">admin</label>
					<input type="admin" name="admin" id="admin" class="form-control">
				</div>
				<div class="form-group">
					<label for="nom">nom</label>
					<input type="nom" name="nom" id="nom" class="form-control">
				</div>
				<div class="form-group">
					<label for="prenom">prenom</label>
					<input type="prenom" name="prenom" id="prenom" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">email</label>
					<input type="email" name="email" id="email" class="form-control">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-info">create professeur</button>
				
				</div>
			</form>
		
		</div> 
	</div>  
	</div>  

<?php require 'footer.php'?>
