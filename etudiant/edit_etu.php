<?php
	require'db_etu.php';
	$CNE=$_GET['CNE'];
	$sql='SELECT * FROM etudiant WHERE CNE=:CNE';
	$statement=$connection->prepare($sql);
	$statement->execute([':CNE'=>$CNE]);
	$person=$statement->fetch(PDO::FETCH_OBJ);
	if(isset($_POST['CNE'])&&isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['filiere']) && isset($_POST['email']) ){
		$CNE=$_POST['CNE'];
		$filiere=$_POST['filiere'];
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$email=$_POST['email'];
		$sql='UPDATE etudiant SET CNE=:CNE,nom_etu=:nom,prenom_etu=:prenom,email_etu=:email,id_filier=:filiere WHERE CNE=:CNE';
		$connection->prepare($sql);
		$statement=$connection->prepare($sql);
		if($statement->execute([':CNE'=>$CNE,':filiere'=>$filiere,'nom'=>$nom,'prenom'=>$prenom,'email'=>$email])){
		header("location:index_etu.php");
			
		
		}
	
	}

?>



<?php require 'header_etu.php';?>
  
 <div class="container">
	<div class="card mr-5">
		<div class="card-header">
		<h2> update etudiant</h2>
		</div> 
		<div class="card-body">
		<?php if(!empty($message)):?>
		<div class="alert alert-success">
			<?= $message; ?>
		
		</div>
		
		<?php endif?>
	
		<form action="" method="POST">
				<div class="form-group">
					<label for="CNE">CNE</label>
					<input value="<?= $person->CNE;?>"  type="text" name="CNE" id="CNE" class="form-control">
				</div>
		
				<div class="form-group">
					<label for="nom">nom</label>
					<input value="<?= $person->nom_etu;?>"  type="nom" name="nom" id="nom" class="form-control">
				</div>
				<div class="form-group">
					<label for="prenom">prenom</label>
					<input value="<?= $person->prenom_etu;?>"  type="prenom" name="prenom" id="prenom" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">email</label>
					<input value="<?= $person->email_etu;?>"   type="email" name="email" id="email" class="form-control">
				</div>
						<div class="form-group">
					<label for="filiere">filiere</label>
					<input  value="<?= $person->id_filier;?>"  type="filiere" name="filiere" id="filiere" class="form-control">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-info">update etudiant</button>
				
				</div>
			</form>
		</div> 
	</div>  
	</div>  

<?php require 'footer.php'?>
