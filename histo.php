<?php
session_start();
include("connection_bdd.php");
date_default_timezone_set('Europe/Amsterdam');
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
				  	<li class="active"><h3>Historique des Bannissements</h3></li>
					</ul>
	<!-- Bans finis -->
				<br><center><h1>Historique des Bannissements</h1></center>
	      		<div class="widget widget-table action-table">
					<div class="widget-content">
						<table class="table table-bordered">
							<tbody><tr>
								<th><strong>#</strong></th>
								<th><strong>Nom</strong></th>
								<th><strong>Nombres de bans</strong></th>
								<th><strong>Plus long ban</strong></th>
								<th><strong>Dernier Ban</strong></th>	
							</tr>
							<?php
							$aff = $bdd->prepare('SELECT * FROM bans, banTV  WHERE bans.id=banTV.idBan and datefin<? group by bans.id ORDER BY user ASC');
        					$aff->execute(array(time()));
        					while ($donnees_aff = $aff->fetch()){
								echo '<tr><td>';
								echo $donnees_aff['id'];
                				echo "</td><td>";
                				echo $donnees_aff['user'];
								echo '</td><td>';
								$i=0;
								$tot =0;
								$tvls = $bdd->prepare('SELECT * FROM tv');
								$tvls->execute(array());
								while ($donnees_tvls = $tvls->fetch()){
									$j =0;
									$nbban = $bdd->prepare('SELECT * FROM banTV  WHERE idBan=? and datefin<? and idTV=?');
        							$nbban->execute(array($donnees_aff['id'],time(),$donnees_tvls['id']));
									while ($donnees_nbban = $nbban->fetch()){
										$j++;			
									}
									if ($j>0){
										if ( $i>0){echo '<br>';}
										echo $donnees_tvls['nom'];
										echo ' : ';
										echo $j;
										$tot = $tot + $j;
										$i++;
									}
								}
								if ($i>1) { echo '<br>Total : '; echo $tot;}
								echo '</td><td>';
								$dban = $bdd->prepare('SELECT * FROM `banTV` WHERE idBan=? ORDER BY duree DESC LIMIT 1');
								$dban->execute(array($donnees_aff['id']));
								while ($donnees_dban = $dban->fetch()){
                					$duree = $donnees_dban['duree'];
									$days = floor($duree/60/60/24);
                        			$hours = $duree/60/60%24;
                        			$mins = $duree/60%60;
                        			$secs = $duree%60;
                        			$duration='';
                        			if($days>0) $duration .= "$days jours ";
                        			if($hours>0) $duration .= "$hours heurs ";
                        			if($mins>0) $duration .= "$mins minutes ";
                        			if($secs>0) $duration .= "$secs seconds ";
                        			echo $duration;
                				}
								echo '</td><td>';
								$dban = $bdd->prepare('SELECT * FROM `banTV` WHERE idBan=? ORDER BY dateFin LIMIT 1');
                				$dban->execute(array($donnees_aff['id']));
                				while ($donnees_dban = $dban->fetch()){
									$datedeb = $donnees_dban['dateFin'] - $donnees_dban['duree'];
									echo 'du ';
                        			echo date('d/m/Y G:i',$datedeb);
									echo ' au ';
									echo date('d/m/Y G:i',$donnees_dban['dateFin']);
								}	
							}
							?>
							</tbody>
						</table>
					</div> <!-- /widget-content -->
				</div> <!-- /widget -->				
			</div> <!-- /span12-->
		</div> <!-- /row -->
		</div><!-- /container -->
	</div> <!-- /main-inner -->
</div> <!-- /main -->

<!-- Footer -->
<?php include('foo.php');?>
