<?php
include("connection_bdd.php");
date_default_timezone_set('Europe/Amsterdam');
?>
﻿<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Mod&eacute;ration Eclypsia - Contact & Lien</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 

	<link rel="icon" href="http://static.eclypsia.com/public/templates/images/ico/fav_icon_2.png">	

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="./css/font-awesome.css" rel="stylesheet">
    
    <link href="./css/default.css" rel="stylesheet">
    <link href="./css/default-responsive.css" rel="stylesheet">
    
    <link href="./css/dashboard.css" rel="stylesheet">   

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

<body>

<?php include('navbar.php');?>

<!-- Tableau d'affichage des mod�rateurs, de leurs mail et skype --> 
<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<ul class="breadcrumb">
						<li><h3><a href="http://ec.kriissss.fr/"><img src="http://static.eclypsia.com/images/logo_eclypsia.png" HEIGHT="150" WIDTH="150" BORDER="0"></a> <span class="divider">›</span></h3></li>
						<li class="active"><h3>Contact & Liens</h3></li>
					</ul>
					<br><center><h1>Contact :</h1></center>
					<div class="widget widget-table action-table">
					</div> <!-- /widget-header -->
					<div class="widget-content">
						<table class="table table-bordered">
							<tbody>
							<tr>
								<th><strong>Nom</strong></th>
								<th><strong>Adresse Mail</strong></th>
								<th><strong>Skype</strong></th>
							</tr>
							<?php 
							$aff = $bdd->prepare('SELECT name, mail, skype FROM moderateur ORDER BY name ASC');
        					$aff->execute(array());
        					while ($donnees_aff = $aff->fetch()){
       							echo "<tr>";
       							echo "<td><strong>".$donnees_aff['name']."</strong></td>";
       							echo "<td><strong>".$donnees_aff['mail']."</strong></td>";
       							echo "<td><strong>".$donnees_aff['skype']."</strong></td>";
       							echo "</tr>";
      						}
							?>
							</tbody>
						</table>
					</div> <!-- /widget-content -->
					<br><center><h1>Liens :</h1></center>
					<div class="widget widget-table action-table">
					</div> <!-- /widget-header -->
					<div class="widget-content">
						<table class="table table-bordered">
							<tbody>
							<tr>
								<th><strong>Nom</strong></th>
								<th><strong>Lien</strong></th>
							</tr>
							<tr>
								<td>Manuel du chat</td>
								<td><a href="https://docs.google.com/document/d/1jyMPUwRIBXrORrtUsrSuOl9VA6wLoO91j9vxUOIwdvY/edit" target="_blank">Manuel</a></td>
							</tr>
							<tr>
								<td>Modifications/Mises a jour</td>
								<td><a href="https://docs.google.com/document/d/1l_j8TbIYKS0_yUbx1-EQM1rc77UfoUdvAPYY6Zpj13E/edit" target="_blank">Modifications Recomand&eacute;es</td>
							</tr>
							<tr>
								<td>Adresse mail de la mod&eacute;ration</td>
								<td>moderateur.ec@gmail.com</td>
							</tr>
							<tr>
								<td>Lien du Google Doc</td>
								<td><a href="https://docs.google.com/spreadsheets/d/1TAJ5zuQKAA3aoM1NQkA6f79zv6SoQ3l-gFMuo56z5MY/edit#gid=1518166152" target="_blank">Mod&eacute;ration V2</a></td>
							</tr>
							<tr>
								<td>Mail de Mod&eacute;ration</td>
								<td><a href="moderateur.ec@gmail.com" target="_blank">moderateur.ec@gmail.com</a></td>
							</tr>
							<tr>
								<td>Mot de Passe</td>
								<td>ECmodo1e</td>
							</tr>
							<tr>
								<td>Cahier des Charges du Site </td>
								<td><a href="https://docs.google.com/document/d/1Ax2wLbiVPqnUNPQtrZAYnVDx_Q6-STYqXd-e1f1JuaY/edit#heading=h.nilhd6fxnnnj" target="_blank">CdC, Id&eacute;es, To-Do</a></td>
							</tr>
							</tbody>
						</table>
					</div> <!-- /widget-content -->
				</div> <!-- /span12 -->     	
			</div> <!-- /row -->
		</div> <!-- /container -->
	</div> <!-- /main-inner -->
</div> <!-- /main -->

<!-- Footer -->

    			</div> <!-- /span12 -->
    		</div> <!-- /row -->
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
