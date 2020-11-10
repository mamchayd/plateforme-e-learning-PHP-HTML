<?php

?>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
        <title>Pure HTML5 file upload | Script Tutorials</title>
        <link href="main.css" rel="stylesheet" type="text/css" />
        <script src="js/script.js"></script>
    </head>
    <body>
        <header>
            <h2 style="color:white;  margin-center:77%;"></h2>
        </header>
        <div class="container">
            <div class="contr"><h2 style="color:white; text-align:center;">Ajouter un fichier</h2></div>

            <div class="upload_form_cont">
                <form id="upload_form" enctype="multipart/form-data" method="post">
                    <div>
                        <div><label for="fichier"> ajouter des fichier</label></div>
                        <div><input type="file" name="fichier" id="fichier" onchange="fileSelected();" /></div><br>
				<div ><select name="choix" id="fichier">
				<OPTION>Maintenace et reseau </OPTION>
				<OPTION>programmation </OPTION>
				<OPTION>DIDACTIQUE</OPTION>
				<OPTION>web</OPTION>
				</select>
                    </div>
					<br>
                    <div>
				<input type="submit" value="Envoyer" onclick="increaseNumber()" name="envoyer"/><BR><br>
                    </div>
                    <div id="fileinfo">
                        <div id="filename"></div>
                        <div id="filesize"></div>
                        <div id="filetype"></div>
                        <div id="filedim"></div>
                    </div>
                    <div id="error">doit ajouter des fichier!</div>
                    <div id="error2">An error occurred while uploading the file</div>
                    <div id="abort">The upload has been canceled by the user or the browser dropped the connection</div>
                    <div id="warnsize">Your file is very big. We can't accept it. Please select more small file</div>

                    <div id="progress_info">
                        <div id="progress"></div>
                        <div id="progress_percent">&nbsp;</div>
                        <div class="clear_both"></div>
                        <div>
                            <div id="speed">&nbsp;</div>
                            <div id="remaining">&nbsp;</div>
                            <div id="b_transfered">&nbsp;</div>
                            <div class="clear_both"></div>
                        </div>
                        <div id="upload_response"></div>
                    </div>
                </form>

                <img id="preview" />
            </div>
        </div>
 
		

			</form>
			<h1>fichier PDF enregistrés</h1>
			
<html lang="en">
<head>
   
   
                    
</body>
</html>








<?php





$tc=$_POST['choix'];
	
try{
$db=new PDO('mysql:host=localhost;dbname=projet','root','');
}catch(PDOException $e){
	die('erreur'.$e->getMessage());
}
if(!empty($_FILES)){
$file_name=$_FILES["fichier"]["name"];
$file_type=$_FILES["fichier"]["type"];
$file_extension=strrchr($file_name,".");

$file_tmp_name=$_FILES["fichier"]["tmp_name"];

$extension_autorisee=array('.pdf','.PDF','.pptx','.docx','.png','.txt');

$file_dest='upload/'.$file_name;

if (in_array($file_extension, $extension_autorisee)) {
		if(move_uploaded_file($file_tmp_name,$file_dest ))
			$req=$db-> prepare('INSERT INTO '.$tc.'(nomDoc,cheminDoc)VALUES(?,?)');
		    $req->execute(array($file_name,$file_dest));  
		    $req1=$db-> prepare('INSERT INTO "notification"(nomdoc)VALUES(?)');
		    $req->execute(array($file_name,$file_dest));  
			echo"fichier envoyer avec succee";


}else{
	echo"seuls les fichier PDF sont autoriser";
}
}


?>

<?php
				$req=$db->query('SELECT nomDoc,cheminDoc from '.$tc.'');
				while($data=$req->fetch()){
					echo $data['nomDoc'].' : '.'<a href="'.$data['cheminDoc'].'">Télecharger</a><br>';
				}
			?>


<article class="grid_3">
                    	<h5>Contact</h5>
                        <dl class="contact">
                            <dt>2256 S Norfolk Street<br>Seattle, WA<br>98118-5648</dt>
                            <dd><span>Phone:</span>  217-764-7449</dd>
                            <dd><span>Fax:</span>  217-763-7912</dd>
                         </dl>
                    </article>
                    <article class="grid_3">
                    	<h5>Legal</h5>
                        <p class="prev-indent-bot3 color-1">la solutions de votre probleme &copy; 2011</p>
                        <p class="prev-indent-bot3">ENS RABAT</p>
                        <p class="color-1 p0"><a class="link" href="http://store.templatemonster.com?aff=netsib1" target="_blank" rel="nofollow">TemplateMonster.com</a></p>
                    </article>
                </div>
            </div>
        </div>
    </footer>
	<script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
		$(window).load(function(){
			$('.slider')._TMS({
				duration:800,
				easing:'easeOutQuad',
				preset:'simpleFade',
				pagination:true,//'.pagination',true,'<ul></ul>'
				pagNums:false,
				slideshow:7000,
				banners:'fade',// fromLeft, fromRight, fromTop, fromBottom
				waitBannerAnimation:false
			})
		})
	</script>
<style >
header {
    background-color:#212124;
    box-shadow: 0 -1px 2px #111111;
    display:block;
    height:70px;
    position:relative;
    width:100%;
    z-index:100;
}
header h2{
    font-size:22px;
    font-weight:normal;
    left:50%;
    margin-left:-400px;
    padding:22px 0;
    position:absolute;
    width:540px;
}
header a.stuts,a.stuts:visited{
    border:none;
    text-decoration:none;
    color:#fcfcfc;
    font-size:14px;
    left:50%;
    line-height:31px;
    margin:23px 0 0 110px;
    position:absolute;
    top:0;
}
header .stuts span {
    font-size:22px;
    font-weight:bold;
    margin-left:5px;
}
.container {
    overflow:hidden;
    width:960px;
    margin:20px auto;
}
.contr {
    background-color:#212124;
    padding:10px 0;
    text-align:center;

    border-radius:10px 10px 0 0;
    -moz-border-radius:10px 10px 0 0;
    -webkit-border-radius:10px 10px 0 0;
}

.upload_form_cont {
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
#upload_form {
    float:left;
    padding:20px;
    width:700px;
}
#preview {
    background-color:#fff;
    display:block;
    float:right;
    width:200px;
}
#upload_form > div {
    margin-bottom:10px;
}
#speed,#remaining {
    float:left;
    width:100px;
}
#b_transfered {
    float:right;
    text-align:right;
}
.clear_both {
    clear:both;
}
input {
    border-radius:10px;
    -moz-border-radius:10px;
    -ms-border-radius:10px;
    -o-border-radius:10px;
    -webkit-border-radius:10px;

    border:1px solid #ccc;
    font-size:14pt;
    padding:5px 10px;
}
input[type=button] {
    background: -moz-linear-gradient(#ffffff, #dfdfdf);
    background: -ms-linear-gradient(#ffffff, #dfdfdf);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffffff), color-stop(100%, #dfdfdf));
    background: -webkit-linear-gradient(#ffffff, #dfdfdf);
    background: -o-linear-gradient(#ffffff, #dfdfdf);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#dfdfdf');
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#dfdfdf')";
    background: linear-gradient(#ffffff, #dfdfdf);
}
#fichier {
    width:400px;
}
#progress_info {
    font-size:10pt;
}
#fileinfo,#error,#error2,#abort,#warnsize {
    color:#aaa;
    display:none;
    font-size:10pt;
    font-style:italic;
    margin-top:10px;
}
#progress {
    border:1px solid #ccc;
    display:none;
    float:left;
    height:14px;

    border-radius:10px;
    -moz-border-radius:10px;
    -ms-border-radius:10px;
    -o-border-radius:10px;
    -webkit-border-radius:10px;

    background: -moz-linear-gradient(#66cc00, #4b9500);
    background: -ms-linear-gradient(#66cc00, #4b9500);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #66cc00), color-stop(100%, #4b9500));
    background: -webkit-linear-gradient(#66cc00, #4b9500);
    background: -o-linear-gradient(#66cc00, #4b9500);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#66cc00', endColorstr='#4b9500');
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#66cc00', endColorstr='#4b9500')";
    background: linear-gradient(#66cc00, #4b9500);
}
#progress_percent {
    float:right;
}
#upload_response {
    margin-top: 10px;
    padding: 20px;
    overflow: hidden;
    display: none;
    border: 1px solid #ccc;

    border-radius:10px;
    -moz-border-radius:10px;
    -ms-border-radius:10px;
    -o-border-radius:10px;
    -webkit-border-radius:10px;

    box-shadow: 0 0 5px #ccc;
    background: -moz-linear-gradient(#bbb, #eee);
    background: -ms-linear-gradient(#bbb, #eee);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #bbb), color-stop(100%, #eee));
    background: -webkit-linear-gradient(#bbb, #eee);
    background: -o-linear-gradient(#bbb, #eee);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#bbb', endColorstr='#eee');
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#bbb', endColorstr='#eee')";
    background: linear-gradient(#bbb, #eee);
}
.select{
	margin-top: 10px;
    padding: 20px;
    overflow: hidden;
    display: none;
    border: 1px solid #ccc;
}
</style>