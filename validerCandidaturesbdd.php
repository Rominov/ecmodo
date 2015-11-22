
<?php
include("connection_bdd.php");
if ( isset($_POST['id']) AND !empty($_POST['id']))
	{
	$id=htmlspecialchars($_POST['id']);	
	$req = $bdd->prepare('UPDATE `recrutement` SET `valider` = "1" WHERE `id` = :id ');
	$req->execute(array( 	
	'id' => $id,
	));
	header('location: validercandidaturesok.php');
	} 
else{
	echo "manque paramettre";
	if(isset($_POST['id'])){ echo 'issetID';}
	if(!empty($_POST['id'])){ echo "emptyID";}
}


?>
