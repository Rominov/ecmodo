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
<?php include('navbar.php');?>
   
<div class="main">
	<div class="main-inner">
	    <div class="container">
			<div class="row">
				<div class="span12">
	      			<ul class="breadcrumb">
				 	 <li><h3><a href="http://ec.kriissss.fr/"><img src="http://static.eclypsia.com/images/logo_eclypsia.png" HEIGHT="150" WIDTH="150" BORDER="0"></a> <span class="divider">›</span></h3></li>
				  	<li class="active"><h3>Candidatures</h3></li>
					</ul>
					
					<!-- Bans rꤥnts -->
					<br><center><h1>Candidatures Non-Traitées :</h1></center>
					<br><b><u>L'option faire voter est réservée aux référents. Merci de ne pas cliquer dessus.</b></u>
					<br>					
	      			<div class="widget widget-table action-table">
						</div> <!-- /widget-header -->
						<div class="widget-content">
							<table class="table table-bordered">
								<tbody>
									<tr>
									<th><strong>#</strong></th>
									<th><strong>Date</strong></th>
									<th><strong>Pseudo</strong></th>
									<th><strong>E-Mail</strong></th>
									<th><strong>Skype</strong></th>
									<th><strong>On fav ?</strong></th>
									<th><strong>Candidature</strong></th>
									<th><strong>Faire Voter </strong></th>
									<th><strong>Refuser </strong></th>
								</tr>
								<?php
								$aff = $bdd->prepare('SELECT * FROM recrutement WHERE valider=0 AND fav=0 AND reffus=0 AND accepte=0');
								$aff->execute(array());
								while ($donnees_aff = $aff->fetch()){
									$avoter = 0;
									$note = 0;
									$com = "";
									echo "<tr><td>";
									echo $donnees_aff['id'];
									echo "</td><td>";
									echo date('d/m/Y G:i', $donnees_aff['date']);
									echo "</td><td>";
									echo $donnees_aff['pseudo'];
									echo '</td><td><a href = "mailto:';
									echo $donnees_aff['mail'];
									echo '">';
									echo $donnees_aff['mail'];
									echo '</a></td><td><a href = "skype:';
									echo $donnees_aff['skype'];
									echo '">';
									echo $donnees_aff['skype'];
									echo '</td><td>';
									echo "<a href='favoriserCandidatures.php?id=" . $donnees_aff['id'] . "'>Ajouter aux Favoris</a>" ;
									echo '</a></td><td><a href="motivcandidature.php?id=';
									echo $donnees_aff['id'];
									echo '" onclick="open(\'motivcandidature.php?id=' . $donnees_aff['id'] . '\', \'Popup\', \'scrollbars=1,resizable=1,height=560,width=770\'); return false;" >Afficher la Candidature</a></td><td style=\'width:80px\'>'; 
									echo "<a href='faireVoterCandidatures.php?id=" . $donnees_aff['id'] . "'>Soumettre au vote</a>";
									echo '</td><td>';
									echo "<a href='refuserCandidatures.php?id=" . $donnees_aff['id'] . "'>Refuser la Candidature</a>";
									echo '</td></tr>';
								}
								?>
								</tbody>
							</table>
						</div>
						<br><center><h1>Candidatures Ajoutées au Favoris :</h1></center>
						<br>
						 <div class="widget-content">
							<table class="table table-bordered">
								<tbody>
									<tr>
									<th><strong>#</strong></th>
									<th><strong>Date</strong></th>
									<th><strong>Pseudo</strong></th>
									<th><strong>E-Mail</strong></th>
									<th><strong>Skype</strong></th>
									<th><strong>Commentaires</strong></th>
									<th><strong>Candidature</strong></th>
									<th><strong>Faire Voter </strong></th>
									<th><strong>Refuser </strong></th>
									<th><strong>Editer Commentaires </strong></th>

									</tr>
							<?php
						$aff = $bdd->prepare('SELECT * FROM recrutement WHERE fav=1 AND valider=0 AND accepte=0');
						$aff->execute(array());
						while ($donnees_aff = $aff->fetch()){
							$avoter = 0;
							$note = 0;
							$com = "";
							echo "<tr><td>";
							echo $donnees_aff['id'];
							echo "</td><td>";
							echo date('d/m/Y G:i', $donnees_aff['date']);
							echo "</td><td>";
							echo $donnees_aff['pseudo'];
							echo '</td><td><a href = "mailto:';
							echo $donnees_aff['mail'];
							echo '">';
							echo $donnees_aff['mail'];
							echo '</a></td><td><a href = "skype:';
							echo $donnees_aff['skype'];
							echo '">';
							echo $donnees_aff['skype'];
							echo '</td><td>';
							echo $donnees_aff['commentaire'];
							echo '</a></td><td><a href="motivcandidature.php?id=';
							echo $donnees_aff['id'];
							echo '" onclick="open(\'motivcandidature.php?id=' . $donnees_aff['id'] . '\', \'Popup\', \'scrollbars=1,resizable=1,height=560,width=770\'); return false;" >Afficher la Candidature</a></td><td style=\'width:80px\'>'; 
							echo "<a href='faireVoterCandidatures.php?id=" . $donnees_aff['id'] . "'>Soumettre au vote</a>";
							echo '</td><td>';
							echo "<a href='refuserCandidatures.php?id=" . $donnees_aff['id'] . "'>Refuser la Candidature</a>";
							echo '</td><td>';
							echo "<a href='editerCommentaire.php?id=" . $donnees_aff['id'] . "'>Editer Commentaire</a>";
							echo '</td></tr>';
							
						}
						?>
						</tbody>
							</table>
							</div>
						<br><center><h1>Candidatures Acceptées:</h1></center>
						<br>
						 <div class="widget-content">
							<table class="table table-bordered">
								<tbody>
									<tr>
									<th><strong>#</strong></th>
									<th><strong>Date</strong></th>
									<th><strong>Pseudo</strong></th>
									<th><strong>E-Mail</strong></th>
									<th><strong>Skype</strong></th>
									<th><strong>Commentaires</strong></th>
									<th><strong>Candidature</strong></th>
									</tr>
							<?php
						$aff = $bdd->prepare('SELECT * FROM recrutement WHERE accepte=1');
						$aff->execute(array());
						while ($donnees_aff = $aff->fetch()){
							$avoter = 0;
							$note = 0;
							$com = "";
							echo "<tr><td>";
							echo $donnees_aff['id'];
							echo '</td><td>';
							echo date('d/m/Y G:i', $donnees_aff['date']);
							echo "</td><td>";
							echo $donnees_aff['pseudo'];
							echo '</td><td><a href = "mailto:';
							echo $donnees_aff['mail'];
							echo '">';
							echo $donnees_aff['mail'];
							echo '</a></td><td><a href = "skype:';
							echo $donnees_aff['skype'];
							echo '">';
							echo $donnees_aff['skype'];
							echo '</td><td>';
							echo $donnees_aff['commentaire'];
							echo '</a></td><td><a href="motivcandidature.php?id=';
							echo $donnees_aff['id'];
							echo '" onclick="open(\'motivcandidature.php?id=' . $donnees_aff['id'] . '\', \'Popup\', \'scrollbars=1,resizable=1,height=560,width=770\'); return false;" >Afficher la Candidature</a></td>'; 
							echo '</tr>';
							
						}
						?>
						</tbody>
							</table>
							</div>
							<br><center><h1>Candidatures Refusées :</h1></center>
						<br>
						 <div class="widget-content">
							<table class="table table-bordered">
								<tbody>
									<tr>
									<th><strong>#</strong></th>
									<th><strong>Pseudo</strong></th>
									<th><strong>E-Mail</strong></th>
									<th><strong>Commentaires</strong></th>
									<th><strong>Candidature</strong></th>
									<th><strong>On fav ?</strong></th>
									</tr>
							<?php
						$aff = $bdd->prepare('SELECT * FROM recrutement WHERE fav=0 AND valider=0 AND reffus=1');
						$aff->execute(array());
						while ($donnees_aff = $aff->fetch()){
							$avoter = 0;
							$note = 0;
							$com = "";
							echo "<tr><td>";
							echo $donnees_aff['id'];
							echo '</td><td>';
							echo $donnees_aff['pseudo'];
							echo '</td><td><a href = "mailto:';
							echo $donnees_aff['mail'];
							echo '">';
							echo $donnees_aff['mail'];
							echo '</td><td>';
							echo $donnees_aff['commentaire'];
							echo '</a></td><td><a href="motivcandidature.php?id=';
							echo $donnees_aff['id'];
							echo '" onclick="open(\'motivcandidature.php?id=' . $donnees_aff['id'] . '\', \'Popup\', \'scrollbars=1,resizable=1,height=560,width=770\'); return false;" >Afficher la Candidature</a></td><td style=\'width:80px\'>'; 
							echo "<a href='favoriserCandidatures.php?id=" . $donnees_aff['id'] . "'>Ajouter aux Favoris</a>" ;
							echo '</td></tr>';
							
						}
						?>
						</tbody>
							</table>
					</div> <!-- /widget-content -->				
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
