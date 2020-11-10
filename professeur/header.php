<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<style>
	/********************** menu ****************************/
	body{
		    background: url(images/pattern.png) 0 0 #F7EBDA repeat;
			color: #2a2a2a;
			font-size: 12px;
			line-height: 1.5;
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		    display: block;
	}
	.menu{
			
			width: 100%;
			background: url(background.jpg) no-repeat;	
			background-size: 100% 200%;
			
			
			overflow:auto;
			position:fixed;
			top:0;
		}
		.menu ul{
		
			margin:0;
			padding:0;
			list-style:none;
			line-height:60px;
		}
		.menu li {
			float:left;
		}
		.menu ul li a{
		
			
			text-decoration:none;
			width:130px;
			display:block;
			text-align:center;
			color:#FAFAFA;
			font-size:18px;
			font-family:sans-serif;
			letter-spacing:0.5px;
			
		}
		.menu li a:hover{
		
			color:#fff;
			opacity:0.5;
			font-size:19px;
		}
		.search-form{
		
			margin-top: 15px;
			float:right;
			margin-right:100px;
		}
		input[type=text]{
		
			padding:7px;
			border:none;
			font-size:16px;
			font-family:sans-serif;
			
		}
		button{
		
			float:right;
			background:orange;
			color:white;
			border-radius:0 5px 5px 0;
			cursor:pointer;
			position:relative;
			padding:7px;
			font-family:sans-serif;
			border:none;
			font-size:16px;
				
			
	}
	</style>
    <title></title>
  </head>
  <body class="bg-info">
  <!--nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://localhost/test/admin/test/admin.php">Retour</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">create professeur</a>
      </li>
      
    </ul>
  
  </div>
</nav>-->
	<div class="menu">
			<ul>
				<li ><a href="menu.html">ACCUEIL</a></li>
				<li ><a href="#">L'ecole</a></li>
				<li ><a href="#">Formations</a></li>
				<li ><a href="#">Recherche</a></li>
				<li ><a href="#">about</a></li>
				<li ><a href="#">contact</a></li>
			</ul>
			<form class="search-form" >
				<input type="text" placeholder="Search">
				<button>Search</button>
			
			</form>
		</div>