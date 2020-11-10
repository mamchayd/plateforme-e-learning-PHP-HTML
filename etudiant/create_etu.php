<?php
	require'db_etu.php';
	$message='';
	if(isset($_POST['cne'])&&isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['filiere']) && isset($_POST['email']) && isset($_POST['pass'])){
		$cne=$_POST['cne'];
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$filiere=$_POST['filiere'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$sql='INSERT INTO etudiant(CNE,nom_etu,prenom_etu,email_etu,id_filier,pass_etu) values(:cne,:nom,:prenom,:email,:filiere,:pass) WHERE etudiant.id_filier=filiere.id_filier';
		$connection->prepare($sql);
		$statement=$connection->prepare($sql);
		if($statement->execute([':cne'=>$cne,':filiere'=>$filiere,':nom'=>$nom,':prenom'=>$prenom,':email'=>$email,':pass'=>$pass]) ){
			
			$message='data inserted avec sucss';
		}
	
	}

?>



<?php require 'header_etu.php';?>
  
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
			<form action="index_etu.php" method="POST">
			
				<div id="result"></div>
				<div class="form-group">
					<label for="cne">cne</label>
					<input type="text" name="cne" id="cne" class="form-control">
				</div>
				<div class="form-group">
					<label for="filiere">filiere</label>
					<input type="filiere" name="filiere" id="filiere" class="form-control">
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
					<label for="pass">pass</label>
					<input type="text" name="pass" id="pass" class="form-control">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-info">create etudiant</button>
				
				</div>
			</form>
		
		</div> 
	</div>  
	</div>  

<?php require 'footer.php'?>
