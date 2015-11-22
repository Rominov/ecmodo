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
			<div class="nav-collapse">
			<ul class="nav">
				
				<li>					
					<a href="./bans.php">
								
						<span>Liste Bans</span>
					</a>	  				
				</li>
				<li>					
					<a href="./histo.php">
						<span>Historique Bans</span>
					</a>	  				
				</li>
				<li>					
					<a href="./modo.php">
								
						<span>Contact & Liens</span>
					</a>	  				
				</li>
				<li>					
					<a href="./protocole.php">
						<span>Protocole</span>
					</a>	  				
				</li>
				<li>					
					<a href="./candidatures.php">
						<span>Sondages & Votes</span>
					</a>	  				
				</li>			
<?php
include("connection_bdd.php");
$validateur = 0;
$blbl = "SELECT * FROM modo where Validateur=1 AND nom='" . $_SERVER['PHP_AUTH_USER'] . "'";
$req = $bdd->query($blbl);
while ($donneesreq = $req->fetch()) {
	$validateur=1;
}
if($validateur==1){
echo "<li><a href='./validercandidatures.php'><span>Liste des Candidatures</span></a></li>";
}
?>
				
					</ul>
				</li>
			
				
			</ul>	
			
			
			
			
				
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->    
