<?php
include("connection_bdd.php");
if ( isset($_POST['nom']) AND !empty($_POST['nom']) AND isset($_POST['lien']) AND !empty($_POST['lien']))
	{
	$nom = htmlspecialchars($_POST['nom']);
	$lien = htmlspecialchars($_POST['lien']);
	/*$result = $bdd->prepare("SELECT * FROM candidature WHERE nom=?");
	$result->execute(array($nom));*/

	$req = $bdd->prepare('INSERT INTO `candidature` (`nom`, `lien`) VALUES (:nom, :lien)');
	$req->execute(array(
	'nom' => $nom,
	'lien' => $lien,
	));
	header('location: candidatures.php');
	} 

else
	{
echo 'Erreur : Il manque un champ.';
	}
?>
