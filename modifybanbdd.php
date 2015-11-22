<?php 
include("connection_bdd.php");

$nom = $_POST['nom'];
$raison = $_POST['raison'];
$duree = $_POST['duree'];
$duree = $duree * 60 * 60 * 24 ;
if(empty($_POST['premium'])){
	$premium = 0;
}
else{
	$premium = $_POST['premium'];
}
$tv = $_POST['tv'];
$modo = $_POST['modo']; 
$id = $_POST['idBan'];
$date = time() + $duree;

$req2 = $bdd->prepare('Update bans set user="'.$nom.'", premium='.$premium.' where id ='.$id.'');
$req2->execute(array());

$req = $bdd->prepare('Update banTV set idTV='.$tv.', idRaison='.$raison.', duree='.$duree.', dateFin='.$date.', idModo='.$modo.' where idBan = '.$id.'');
$req->execute(array());

header('location: bans.php');