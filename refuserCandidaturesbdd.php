<?php
include("connection_bdd.php");
if ( isset($_POST['id']) AND !empty($_POST['id']) AND isset($_POST['commentaire']) AND !empty($_POST['commentaire']))
{
	$id=htmlspecialchars($_POST['id']);
	$commentaire=htmlspecialchars($_POST['commentaire']);
	
	
	$req = $bdd->prepare('UPDATE `recrutement` SET `reffus` = "1", `commentaire`= :commentaire, `fav` = "0"  WHERE `id` = :id ');
	$req->execute(array(
	'id' => $id,
	'commentaire' => $commentaire
	));
	header('location: refusercandidaturesok.php');
}else{
	echo "manque paramettre";
	if(isset($_POST['id'])){ echo 'issetID';}
	if(isset($_POST['commentaire'])){ echo 'issetCOM';}
	if(!empty($_POST['id'])){ echo "emptyID";}
	if(!empty($_POST['commentaire'])){ echo "emptyCOM";}
}



?>
