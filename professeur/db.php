<?php
$dsn='mysql:host=localhost;dbname=ens';
$username='root';
$password='';
$options=[];


try{
	
$connection=new PDO($dsn,$username,$password,$options);

}

catch(PDOException $e)
{
	
	
	
}?>