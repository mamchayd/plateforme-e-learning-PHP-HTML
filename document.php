
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<html>
<table border="2">
<?php
try{
$db=new PDO('mysql:host=localhost;dbname=projet','root','');
}catch(PDOException $e){
	die('erreur'.$e->getMessage());
}





				$req=$db->query('SELECT nomDoc,cheminDoc from Programmation');
				while($data=$req->fetch()){?><tr><td>
					<?php echo $data['nomDoc']  ?></td> <td><a href="<?php $data['cheminDoc']?>">  Télecharger</a></td>
			<?php	}
			?>
			</border>
			
			<style>
			table {
 border-width:1px; 
 border-style:solid; 
 border-color:black;
 width:80%;
 
 }
td { 
 border-width:1px;
 border-style:solid; 
 border-color:red;
 width:50%;
 border:1px solid black;
  background: -moz-linear-gradient(#ffffff, #f2f2f2);
    background: -ms-linear-gradient(#ffffff, #f2f2f2);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffffff), color-stop(100%, #f2f2f2));
    background: -webkit-linear-gradient(#ffffff, #f2f2f2);
    background: -o-linear-gradient(#ffffff, #f2f2f2);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f2f2f2');
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f2f2f2')";
    background: linear-gradient(#ffffff, #f2f2f2);

    color:#000;
    overflow:hidden;
 }
 
			
			</style>
			</html>
	