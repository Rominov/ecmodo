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
				  	<li class="active"><h3>Sondages & Votes</h3></li>
					</ul>
					
					<!-- Bans rꤥnts -->
					<br><center><h1>Vote des Candidatures :</h1></center>
					<br>					
						<center><h3><i> Attention ! Tout vote rentré est définitif ! </i></h3></center>
					<br>
						<?php 
						$blbl = "SELECT * FROM modo where Validateur=2 AND nom='".$_COOKIE['connexion']."'";
						$req = $bdd->query($blbl);
						while ($donneesreq = $req->fetch()) {
							$sadmin=1;
						}
						
						if($sadmin == 1)
						{
							echo "<form method=post action='terminervote.php'>";
							echo "<center><button type='submit' class='btn btn-success'>Mettre fin aux votes</button></center>";
							echo "</form>";
						}
						
						?>
	      			<div class="widget widget-table action-table">
						</div> <!-- /widget-header -->
						<div class="widget-content">
							<table class="table table-bordered">
								<tbody>
									<tr>
									<th><strong>#</strong></th>
									<th><strong>Nom</strong></th>
									<th><strong>Candidature</strong></th>
									<th><strong>Note</strong></th>
									<th><strong>Nom du Votant</strong></th>
									<th><strong>Commentaire </strong><br><i>Donner votre opinion sur la candidature. Remplissage obligatoire si la note est de 0 !!! </i></th>
									<th><strong>Vote</strong></th></form>
								</tr>
								</br>
								</br>
								<?php
								if(isset($_SESSION['finvote']))
								{
									$finvote = 1;
								}
								
								if($finvote == 1)
								{
								$aff = $bdd->prepare('SELECT * FROM recrutement WHERE valider=1');
								$aff->execute(array());
								while ($donnees_aff = $aff->fetch()){
									$avoter = 0;
									$note = 0;
									$com = "";
									$aff2 = $bdd->prepare('SELECT * FROM vote WHERE IdCandidature = ? AND modo = ?');
									$aff2->execute(array($donnees_aff['id'], $_COOKIE['connexion']));
									while ($donnees_aff2 = $aff2->fetch()){
										$avoter =1;
										$note = $donnees_aff2['note'];
										$com = $donnees_aff2['commentaire'];
									}

									echo "<tr><form action='addvotebdd.php' method='post'><td>";
									echo $donnees_aff['id'];
									echo "</td><td>";
									echo $donnees_aff['pseudo'];
									echo '</td><td><a href="motivcandidature.php?id=';
									echo $donnees_aff['id'];
									echo '" onclick="open(\'motivcandidature.php?id=' . $donnees_aff['id'] . '\', \'Popup\', \'scrollbars=1,resizable=1,height=560,width=770\'); return false;" >Cliquez ici</a></td><td style=\'width:80px\'>'; 
									if ($avoter == 1){
										echo $note;
									} else {
									?>
								<select name="note" style="width:75px">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
									<?php
									}
									echo "</td><td> ";
									echo $_COOKIE['connexion'];
									echo '<input type="hidden" name="id" value="';
									echo $donnees_aff ['id'];
									echo '"><input type="hidden" name="modo" value="';
									echo  $_COOKIE['connexion'];
									echo '">';
									echo "</td><td width=60%>";
									if ($avoter == 1){
										echo $com;
									} else {
									?>
								<textarea name="message" rows="8" cols="1" style="width: 95%;">
								</textarea> 
								<?php
									}
									echo"</td><td>";
									if ($avoter == 1){
										echo 'Vous avez déjà voté';
									} else {
								?>
									<input type="submit" value="Voter" class="button btn btn-primary" >
								<?php	
									}
								echo"</td></form></tr>";
								}
								}
								?>
								</tbody>
							</table>
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
