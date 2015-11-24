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
				  	<li class="active"><h3>Liste des Bans</h3></li>
					</ul>
					
					<!-- Bans r�cents -->
					<br><center><h1>Liste des Bannissements :</h1></center>
	      			<div class="widget widget-table action-table">
						</div> <!-- /widget-header -->
						<div class="widget-content">
							<table class="table table-bordered">
								<tbody><tr>
									<th><strong>#</strong></th>
									<th><strong>Nom</strong></th>
									<th><strong>TV</strong></th>
									<th><strong>Modérateur</strong></th>
									<th><strong>Raison</strong></th>
									<th><strong>Date</strong></th>
									<th><strong>Durée</strong></th>
									<th><strong>Echéance</strong></th>
									<th><strong>Ban IP</strong></th>
								</tr>
								<a class="button btn btn-primary" type="button" href="http://ec.kriissss.fr/addban.php">Ajouter un ban</a>
								</br>
								</br>
								<form action="bans.php" method="post">
									<select name="triage">
										<option value="user">Nom</option>
										<option value="idModo">Modérateur</option>
										<option value="idTV">TV</option>
										<option value="dateFin-duree">Date</option>
										<option value="duree">Durée</option>
										<option value="dateFin">Echéance</option>
									</select>
									<INPUT TYPE="submit" NAME="validation" VALUE="Trier">
								</form>
								</br>
								<form action="bans.php" method="post">
									<input type="text" name="idBanDel" placeholder="Indiquer l'ID du ban &agrave; supprimer">
									<input type="submit" name="validation" value="Supprimer" onClick="suppression()">
								</form>
								</br>
								<form action="modifyban.php" method="post">
									<input type="text" name="idBanMod" placeholder="Indiquer l'ID du ban &agrave; modifier">
									<input type="submit" name="validation" value="Modifier">
								</form>
								<?php
								if(isset($_POST['idBanDel']))
								{
									$aff = $bdd->prepare('DELETE FROM bans WHERE id = '.$_POST['idBanDel'].'');
									$aff = $bdd->prepare('DELETE FROM banTV WHERE idBan = '.$_POST['idBanDel'].'');
									$aff->execute(array(time()));
								}
								if(isset($_POST['triage']))
								{
									$aff = $bdd->prepare('SELECT * FROM bans, banTV  WHERE bans.id=banTV.idBan and datefin>? group by bans.id ORDER BY '.$_POST['triage'].' ASC');
	    							$aff->execute(array(time()));
								}
								else
								{
	    							$aff = $bdd->prepare('SELECT * FROM bans, banTV  WHERE bans.id=banTV.idBan and datefin>? group by bans.id ORDER BY dateFin-duree DESC');
    								$aff->execute(array(time()));
								}
								while ($donnees_aff = $aff->fetch()){
									echo "<tr><td>";
									echo $donnees_aff['id'];
									echo "</td><td>";
									echo $donnees_aff['user'];
									unset($bannissement);
									$bannissement = array(array());
									$i=0;
									$ban = $bdd->prepare('SELECT banTV.duree, banTV.dateFin, modo.nom AS modo, motif, tv.nom AS tv FROM banTV, modo, raison, tv  WHERE banTV.idTV=tv.id and banTV.idRaison=raison.id and banTV.idModo=modo.id and banTV.idBan=? and dateFin>? ORDER BY dateFin ASC');
									$ban-> execute(array($donnees_aff['id'],time()));
									while ($donnees_ban = $ban->fetch()){
										$i++;
										$bannissement['duree'][]=$donnees_ban['duree'];
										$bannissement['dateFin'][]=$donnees_ban['dateFin'];
										$bannissement['modo'][]=$donnees_ban['modo'];
										$bannissement['motif'][]=$donnees_ban['motif'];
										$bannissement['tv'][]=$donnees_ban['tv'];
									}
									echo '</td><td>';
                					for($j=0;$j<$i;$j++){
	                        			if ($j>0){echo '<br>';}
                        				echo $bannissement['tv'][$j];
                					}
									echo '</td><td>';
									for($j=0;$j<$i;$j++){
										if ($j>0){echo '<br>';}
										echo $bannissement['modo'][$j];
									} 
									echo '</td><td>';
									for($j=0;$j<$i;$j++){
	                        			if ($j>0){echo '<br>';}
                        				echo $bannissement['motif'][$j];
                					}
									echo '</td><td>';
                					for($j=0;$j<$i;$j++){
	                        			if ($j>0){echo '<br>';}
										$datedeb = $bannissement['dateFin'][$j] - $bannissement['duree'][$j];
                       					echo date('d/m/Y G:i',$datedeb);
               						}
									echo '</td><td>';
                					for($j=0;$j<$i;$j++){
	                        			if ($j>0){echo '<br>';}
										$duree = $bannissement['duree'][$j];
										$days = floor($duree/60/60/24);
 										$hours = $duree/60/60%24;
 										$mins = $duree/60%60;
 										$secs = $duree%60;
										$duration='';
										if($days>0) $duration .= "$days jours ";
										if($hours>0) $duration .= "$hours heures ";
										if($mins>0) $duration .= "$mins minutes ";
										if($secs>0) $duration .= "$secs secondes ";
                        				echo $duration;
                					}
									echo '</td><td>';
                					for($j=0;$j<$i;$j++){
	                        			if ($j>0){echo '<br>';}
                        				echo date('d/m/Y G:i',$bannissement['dateFin'][$j]);
                					}
									echo '</td><td>';
									if ( $donnees_aff['premium'] == 1 ){ 
									echo '<b>Ban IP</b>';
									}
									else 
									{ 
										echo 'Ban Normal';
									}
									echo '</td>';
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
