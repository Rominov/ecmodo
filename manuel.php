<?php
include("connection_bdd.php");
date_default_timezone_set('Europe/Amsterdam');
?>
﻿<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Modération Eclypsia - Ligne Directrice</title>
    
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



<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="ec.kriissss.fr">
			<img src="http://static.eclypsia.com/images/logo_eclypsia.png" HEIGHT="150" WIDTH="150" BORDER="0">
			</a>
			<div class="nav-collapse">
			<ul class="nav">
				
				<li>					
					<a href="./bans.php">
								
						<span>Liste Bans</span>
					</a>	  				
				</li>
				<li>					
					<a href="./addban.php">
								
						<span>Ajouter un Ban</span>
					</a>	  				
				</li>
				<li>					
					<a href="./modo.php">
								
						<span>Contact & Liens </span>
					</a>	  				
				</li>
				<li>					
					<a href="./manuel.php">
								
						<span>Ligne Directrice</span>
					</a>	  				
				</li>
				
					</ul>
				</li>
			
				
			</ul>	
			
			
				
				
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->    



    

    
    
<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">

	      		<ul class="breadcrumb">
				  <li><h3><a href="http://ec.kriissss.fr/"><img src="http://static.eclypsia.com/images/logo_eclypsia.png" HEIGHT="150" WIDTH="150" BORDER="0"></a> <span class="divider">›</span></h3></li>
				  <li class="active"><h3>Ligne Directrice de la Modération Eclypsia</h3></li>
				</ul>

				<br><center><h1>Ligne Directrice de la Modération Eclypsia  :</h1></center>
	      		
	<h3><strong>1 : Le Chat </strong></h3><br/>
	<h3><strong>2 : Les Commentaires</strong></h3>
	
   <?php 
/*$aff = $bdd->prepare('SELECT nom, mail, skype FROM modo ORDER BY nom ASC');
        $aff->execute(array());
        while ($donnees_aff = $aff->fetch()){
       echo "<tr>";
       echo "<td><strong>".$donnees_aff['nom']."</strong></td>";
       echo "<td><strong>".$donnees_aff['mail']."</strong></td>";
       echo "<td><strong>".$donnees_aff['skype']."</strong></td>";
       echo "</tr>";
      } */
?> 

	
						</tbody></table>

						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->				
				
		    </div> <!-- /span12 -->     	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->

    
	<div class="footer">
	
	<div class="footer-inner">
		
		<div class="container">
			
			
                 
				                   
                     <br> v1.0 © 2014. Tous droits réservés Rominov, Elaya, GaMa (CSS).



                     
							
    			</div> <!-- /span12 -->
    			
    		</div> <!-- /row -->
    		
		</div> <!-- /container -->
		
	</div> <!-- /footer-inner -->
	
</div> <!-- /footer -->	

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
