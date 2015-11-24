<?php
include("connection_bdd.php");
if ( isset($_POST['nom']) AND !empty($_POST['nom']) AND isset($_POST['mail']) AND !empty($_POST['mail']) AND isset($_POST['pseudo']) AND !empty($_POST['pseudo'])AND isset($_POST['age']) AND !empty($_POST['age'])AND isset($_POST['skype']) AND !empty($_POST['skype'])AND isset($_POST['message']) AND !empty($_POST['message']) AND isset($_POST['streamers']) AND !empty($_POST['streamers'])AND isset($_POST['horraires']) AND !empty($_POST['horraires']))
	{
	$nom = htmlspecialchars($_POST['nom']);
	$mail = htmlspecialchars($_POST['mail']);
	$pseudo = htmlspecialchars($_POST['pseudo']);
	$age = htmlspecialchars($_POST['age']);
	$skype = htmlspecialchars($_POST['skype']);
	$message = htmlspecialchars($_POST['message']);
	$streamers = htmlspecialchars($_POST['streamers']);
	$horraires = htmlspecialchars($_POST['horraires']);
	/*$result = $bdd->prepare("SELECT * FROM candidature WHERE nom=?");
	$result->execute(array($nom));*/

	$req = $bdd->prepare('INSERT INTO `recrutement` (`nom`, `mail`, `pseudo`, `age`, `skype`, `message`, `streamers`, `horraires`) VALUES (:nom, :mail, :pseudo, :age, :skype, :message, :streamers, :horraires)');
	$req->execute(array(
	'nom' => $nom,
	'mail' => $mail,
	'pseudo' => $pseudo,
	'age' => $age,
	'skype' => $skype,
	'message' => $message,
	'streamers' => $streamers,
	'horraires' => $horraires,
	));
	header('location: recrutementok.php');
	}

else
	{
echo 'Erreur : Il manque un champ.';
	}
?>
