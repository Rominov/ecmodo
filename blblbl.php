<?php
session_start();
include("connection_bdd.php");
date_default_timezone_set('Europe/Amsterdam');
?>

<?php $aff = $bdd->prepare('SELECT modo,commentaire FROM vote WHERE idCandidature=38');
								$aff->execute(array());
								while ($donnees_aff = $aff->fetch()){
									echo $donnees_aff['id'];
									echo $donnees_aff['note'];
									echo $donnees_aff['modo'];
									echo $donnees_aff['commentaire'];
								}
								?>