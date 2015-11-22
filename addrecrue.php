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



<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			
			<img src="http://static.eclypsia.com/images/logo_eclypsia.png" HEIGHT="150" WIDTH="150" BORDER="0">
			
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->    



    

    
    
<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">

	      		<ul class="breadcrumb">
				  <li><h3><img src="http://static.eclypsia.com/images/logo_eclypsia.png" HEIGHT="150" WIDTH="150" BORDER="0"> <span class="divider">›</span></h3></li>
				  <li class="active"><h3>Postuler à la Modération Eclypsia</h3></li>
				</ul>

				<br><center><h1>Formulaire de Recrutement:</h1></center><br><br>
				<i><h3>Merci de ne faire qu'une seule candidature. Vous pouvez si vous le souhaitez écrire votre candidature sur un éditeur de texte, l'héberger sur un site et nous mettre le lien dans "Votre Candidature"</h3></i><br>
				
					<form method="post" action="addrecruebdd.php">
 							<p> 
								Prénom / Nom : <br>
								<input type="text"  name="nom" />
								<br>
								Adresse e-mail  : <br>
								<input type="text"  name="mail" /><br>
								<br>
								Pseudo Eclypsia  : <br>
								<input type="text"  name="pseudo" /><br>
								<br>
								Âge  : <br>
								<input type="text"  name="age" /><br>
								<br>
								Skype  : <br>
								<input type="text"  name="skype" /><br>
								<br>
								Votre Candidature (Comme une lettre de motivation, vos expériences, vos disponibilités, les streameurs et tv que vous aimez. etc...) <br>
								<textarea name="message" rows="8" cols="45" />
								Ecrivez votre candidature ici...
								</textarea>
								<br>
								Streamers Favoris <i>(Séparer les noms par des virgules) </i> : <br>
								<input type="text"  name="streamers" /><br>
								<br>
								Horaires de présence <i>Séparer les jours par des virgules (Lundi de 10h à 18h, Mardi de 15h à 16h....)</i> : <br>
								<input type="text"  name="horraires" /><br>
								<br>
								<input type="submit" value="Envoyer Candidature" class="button btn btn-primary" >
							</p> 
					</form>
		    
			</div> <!-- /span12 -->          	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->

    
	<div class="footer">
	
	<div class="footer-inner">
		
		<div class="container">
			            
				                   
                     <br> v2.0 © 2015. Tous droits réservés Rominov, Elaya, GaMa(CSS), Yukii.                 
						
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
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwik.kriissss.fr/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 2]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//piwik.kriissss.fr/piwik.php?idsite=2" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

  </body>
</html>
