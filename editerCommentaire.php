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
			
			<a class="brand" href="bans.php">
			<img src="http://static.eclypsia.com/images/logo_eclypsia.png" HEIGHT="150" WIDTH="150" BORDER="0">
			</a>
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->    



    

    
    
<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">

	      		<ul class="breadcrumb">
				  <li><h3><a href="http://ec.kriissss.fr/"><img src="http://static.eclypsia.com/images/logo_eclypsia.png" HEIGHT="150" WIDTH="150" BORDER="0"></a> <span class="divider">></span></h3></li>
				  <li class="active"><h3>Modification de Commentaire</h3></li>
				</ul>
						<?php 
								$aff = $bdd->prepare('SELECT commentaire FROM recrutement WHERE recrutement.id='.$_GET['id'].'');
								$aff->execute(array());
								while ($donnees_aff = $aff->fetch()){
									echo ('Commentaire Actuel : ');
									echo  ($commentaire =  $donnees_aff['commentaire']);
								}
								?>
								<br><br>
	<form method="post" action="editerCommentairebdd.php">
 			<p> 
			<textarea name="commentaire" rows="10" cols="50">Merci de mettre l'ancien commentaire qui est au dessus pour garder une trace....</textarea>
			<input type="hidden" name="id" value=<?php echo $_GET['id'] ?>>
			<input type="submit" value="Editer le Commentaire" class="button btn btn-primary" >
			</p>
	</form>
			</div> <!-- /span12 -->          	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->

    
	        
						
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


