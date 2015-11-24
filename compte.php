<?php
session_start();
include("connection_bdd.php");
date_default_timezone_set('Europe/Amsterdam');
if(!isset($_COOKIE['connexion']))
{
	header('location: index.php');
}

?>
﻿<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>EC Modo Website</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 

	<link rel="icon" href="http://static.eclypsia.com/public/templates/images/ico/fav_icon_2.png">	

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="./css/font-awesome.css" rel="stylesheet">
    
    <link href="./css/default.css" rel="stylesheet">
    <link href="./css/default-responsive.css" rel="stylesheet">
    
    <!-- <link href="./css/dashboard.css" rel="stylesheet">  -->  

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

<body>

    <?php include('navbar.php');
    
    $sql = "SELECT * FROM modo WHERE nom='".$_COOKIE['connexion']."'";
    foreach  ($bdd->query($sql) as $row) {
    	$name = $row['nom'];
    	$mail = $row['mail'];
    	$skype = $row['skype'];
    }
    
    ?>
   
<div class="main">
	<div class="main-inner">
	    <div class="container">
			<div class="row">
				<div class="span12">
	      			<ul class="breadcrumb">
				 	 <li><h3><a href="http://ec.kriissss.fr/"><img src="http://static.eclypsia.com/images/logo_eclypsia.png" HEIGHT="150" WIDTH="150" BORDER="0"></a> <span class="divider">›</span></h3></li>
				  	<li class="active"><h3>Gestion de mon compte</h3></li>
					</ul>
					
					<div class="widget widget-table action-table">
						</div> <!-- /widget-header -->
						<div class="widget-content">
							
							<table class="table table-bordered">
								<tr>
									<th><strong>Nom</strong></th>
									<th><strong>Mot de passe</strong></th>
									<th><strong>Mail</strong></th>
									<th><strong>Skype</strong></th>
									<th></th>
								</tr>
								<tr>
									<th><?php echo $name;?></th>
									<th><?php echo "*******";?></th>
									<th><?php echo $mail;?></th>
									<th><?php echo $skype;?></th>
									<th></th>
								</tr>
								<tr>
								<form method="post" action="modifcompte.php">
									<th></th>
									<th><input type="password" name="pwd" /></th>
									<th><input type="email" name="mail" /></th>
									<th><input type="text" name="skype" /></th>
									<th><button type="submit" class="btn btn-default">Modifier</button></th>
								</form>	
								</tr>
							</table>	
						</div>
					</div>
					
					
					</div> <!-- /widget-content -->
		    	</div> <!-- /span12 -->     	
			</div> <!-- /row -->
		</div> <!-- /container -->
	</div> <!-- /main-inner -->
</div> <!-- /main -->

<!-- Footer -->
<?php include('foo.php');?>

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./js/jquery.js"></script>
<script src="./js/excanvas.min.js"></script>
<script src="./js/jquery.flot.js"></script>
<script src="./js/jquery.flot.pie.js"></script>
<script src="./js/jquery.flot.orderBars.js"></script>
<script src="./js/jquery.flot.resize.js"></script>


<script src="./js/bootstrap.js"></script>
<script src="./js/base.js"></script>

<script src="./js/area.js"></script>
<script src="./js/donut.js"></script>
  </body>
</html>
