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
				  	<li class="active"><h3>Résultats des Votes</h3></li>
					</ul>
			

				   <!-- Bans rꤥnts -->
					<br><center><h1> Résultats : </h1></center>
					<br>					
	      			<div class="widget widget-table action-table">
						</div> <!-- /widget-header -->
						<div class="widget-content">
							<table class="table table-bordered">
							<tr>
									<th><strong>Candidat </strong></th>
									
									
<?php 
 $listModoReq = $bdd->query('SELECT nom FROM modo ORDER BY nom ASC');
$listModo = array();
while ($donneesListModo = $listModoReq->fetch())
{
	echo "<th><strong>".$donneesListModo['nom'] ."</strong></th>";
	$listModo[]= $donneesListModo['nom'];
}?>
									
							</tr>
							
							
<?php
$candidat = $bdd->query('SELECT id, pseudo FROM recrutement WHERE valider=1 ORDER BY id ASC');
$tableauCandidats = array();
while ($donnees = $candidat->fetch())
{
	$tableauCandidats[$donnees['pseudo']] = array();
	$tableauCandidats[$donnees['pseudo']][nb] = 0;
	$tableauCandidats[$donnees['pseudo']][moyen] = 0;

	echo "<tr><td>". $donnees['pseudo'] ."</td>";
	foreach ($listModo as &$nomModo) {
		$aff = "&#216";
		$candidat2 = $bdd->query("SELECT note FROM vote WHERE modo='". $nomModo ."' AND idCandidature=" . $donnees['id']);
		while ($donnees2 = $candidat2->fetch())
        	{
			if(isset($donnees2['note'])) {
				$tableauCandidats[$donnees['pseudo']]['nb'] += 1;
				$tableauCandidats[$donnees['pseudo']]['moyen'] += $donnees2['note'];
				$aff =$donnees2['note'];
			}
        	}
		echo "<td>". $aff . "</td>";
	}
echo "</tr>";
}
?> 

</table>

<br><center><h1> Resumé : </h1></center>
                                        <br>                                    
                                <div class="widget widget-table action-table">
                                                </div> <!-- /widget-header -->
                                                <div class="widget-content">
                                                        <table class="table table-bordered">
                                                        <tr><th><strong>Candidat </strong></th><th><strong>Moyenne </strong></th><th><strong>Total </strong></th><th><strong>Nombre de vote </strong></th></tr>
<?php
foreach ($tableauCandidats as $key => $tabCandidatsMoyen) {
	$moyen = $tabCandidatsMoyen['moyen']/$tabCandidatsMoyen['nb'];
	echo "<tr><td>" . $key . "</td><td>" . number_format($moyen, 2, '.', ' ') . "</td><td>" . $tabCandidatsMoyen['moyen'] . "</td><td>" . $tabCandidatsMoyen['nb'] . "</td></tr>";
}
?>
</table>

					</div> <!-- /widget-content -->
		    	</div> <!-- /span12 -->     	
			</div> <!-- /row -->
		</div> <!-- /container -->
	</div> <!-- /main-inner -->
</div> <!-- /main -->
</div>
</div>
</div>
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
