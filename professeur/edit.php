<?php
	require'db.php';
	$matricul=$_GET['matricul_prof'];
	$sql='SELECT * FROM professeur WHERE matricul_prof=:matricul';
	$statement=$connection->prepare($sql);
	$statement->execute([':matricul'=>$matricul]);
	$person=$statement->fetch(PDO::FETCH_OBJ);
	if(isset($_POST['matricul'])&&isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['admin']) && isset($_POST['email']) ){
		$matricul=$_POST['matricul'];
		$admin=$_POST['admin'];
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$email=$_POST['email'];
		$sql='UPDATE professeur SET matricul_prof=:matricul,matricul_admin=:admin,nom_prof=:nom,prenom_prof=:prenom,email_prof=:email WHERE matricul_prof=:matricul';
		$connection->prepare($sql);
		$statement=$connection->prepare($sql);
		if($statement->execute([':matricul'=>$matricul,':admin'=>$admin,'nom'=>$nom,'prenom'=>$prenom,'email'=>$email])){
		header("location:index.php");
			
		
		}
	
	}

?>



<?php require 'header.php';?>
  
 <div class="container">
	<div class="card mr-5">
		<div class="card-header">
		<h2> update a personne</h2>
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
					<input value="<?= $person->matricul_prof;?>"  type="text" name="matricul" id="matricul" class="form-control">
				</div>
				<div class="form-group">
					<label for="admin">admin</label>
					<input  value="<?= $person->matricul_admin;?>"  type="admin" name="admin" id="admin" class="form-control">
				</div>
				<div class="form-group">
					<label for="nom">nom</label>
					<input value="<?= $person->nom_prof;?>"  type="nom" name="nom" id="nom" class="form-control">
				</div>
				<div class="form-group">
					<label for="prenom">prenom</label>
					<input value="<?= $person->prenom_prof;?>"  type="prenom" name="prenom" id="prenom" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">email</label>
					<input value="<?= $person->email_prof;?>"   type="email" name="email" id="email" class="form-control">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-info">update personne</button>
				
				</div>
			</form>
		</div> 
	</div>  
	</div>  

<?php require 'footer.php'?>
