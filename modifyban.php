<?php
include("connection_bdd.php");
date_default_timezone_set('Europe/Amsterdam');
?>
<!DOCTYPE html>
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
    
    <link href="./css/dashboard.css" rel="stylesheet">   

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
						<li class="active"><h3>Modifier un Ban</h3></li>
					</ul>
					<br>
					<center><h1>Liste des Bannissements :</h1></center>
					<center>Attention, vous devez re-&eacute;crire le nom et la dur&eactue;e, m&ecirc;me si l'information est d&eacute;j&agrave; &eacute;crite et qu'elle ne doit pas &ecirc;tre modifi&eacute;</center>
	      			<div class="widget widget-table action-table">
					</div> <!-- /widget-header -->
						<div class="widget-content">
							<table class="table table-bordered">
							<tr>
								<th>Nom</th>
								<th>Raison</th>
								<th>Duree ( en jours )</th>
								<th>Premium</th>
								<th>TV</th>
								<th>Mod&eacute;rateur</th>
							</tr>
							<tr>
								<?php 
								$aff = $bdd->prepare('SELECT * FROM bans, banTV  WHERE bans.id= '.$_POST['idBanMod'].'');
								$aff->execute(array());
								while ($donnees_aff = $aff->fetch()){
									$nom =  $donnees_aff['user'];
									$raison = $donnees_aff['idRaison'];
									$duree =  $donnees_aff['duree'];
									$premium = $donnees_aff['premium'];
									$tv =  $donnees_aff['idTV'];
									$modo = $donnees_aff['idModo'];
								}
								?>
								<form action="modifybanbdd.php" method="post">
									<td><input type="text" name="nom" id="nom" placeholder="<?php echo $nom;?>"></td>
									<td>
									<select name="raison" id="raison" placeholder="<?php echo $raison;?>">
									<?php
									$aff = $bdd->prepare('SELECT motif FROM raison where id = '.$raison);
									$aff->execute(array());
									while ($donnees_aff = $aff->fetch()){
										echo '<option value="';
										echo $raison;
										echo '">';
										echo $donnees_aff['motif'];
										echo '</option>';
									}
									echo '<option value"" disabled>_______________________</option>';									
									
									$aff = $bdd->prepare('SELECT * FROM raison');
									$aff->execute(array());
									while ($donnees_aff = $aff->fetch()){
										echo '<option value="';
										echo $donnees_aff['id'];
										echo '">';
										echo $donnees_aff['motif'];
										echo '</option>';
									}
									?>
									</select>
									</td>
									<?php 
									$days = floor($duree/60/60/24);
									$hours = $duree/60/60%24;
									$mins = $duree/60%60;
									$secs = $duree%60;
									$duration='';
									if($days>0) $duration .= "$days jours ";
									?>
									<td><input type="number" name="duree" id="duree" placeholder="<?php echo $duration;?>"></td>
									<td><input type="checkbox" name="premium" id="premium" value="1" <?php if($premium == "1"){echo "checked";}?>>Utilisateur Premium</td>
									<td>
									<?php
                                	$aff = $bdd->prepare('SELECT * FROM tv');
                                	$aff->execute(array());
									$i = 0;
                                	while ($donnees_aff = $aff->fetch()){
	                                    if($i>0){echo '<br>';}
										echo '<input type="radio" name="tv" id="tv" value="';
                                		echo $donnees_aff['id'];
                                		echo '"';
										if($i == $tv-1){echo "checked";}
										echo '>';
                                		echo $donnees_aff['nom'];
										$i++;
                                	}
                             		?>
									</td>
									<td>
									<select name="modo" id="modo">
									<?php 
									$aff = $bdd->prepare('SELECT nom FROM modo where id = '.$modo);
									$aff->execute(array());
									while ($donnees_aff = $aff->fetch()){
										echo '<option value="';
										echo $modo;
										echo '">';
										echo $donnees_aff['nom'];
										echo '</option>';
									}
									echo '<option value"" disabled>_______________________</option>';
									
                                 	$aff = $bdd->prepare('SELECT * FROM modo');
                                 	$aff->execute(array());
                                 	while ($donnees_aff = $aff->fetch()){
	                                    echo '<option value="';
                                    	echo $donnees_aff['id'];
                                    	echo '">';
                                    	echo $donnees_aff['nom'];
                                  		echo '</option>';
                                	}
                               		?>
                               		</select>
                               		<input type="hidden" name="idBan" value="<?php echo $_POST['idBanMod']; ?>">
                               	<input type="submit" value="Modifier Le ban" class="button btn btn-primary" ></center>
							</form></tr>
						</table></center>
					</div> <!-- /widget-content -->
				</div> <!-- /span12 -->     	
			</div> <!-- /row -->
		</div> <!-- /container -->
	</div> <!-- /main-inner -->
</div> <!-- /main -->
    
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
