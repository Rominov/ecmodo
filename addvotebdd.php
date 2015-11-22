<?php
include("connection_bdd.php");
if ( isset($_POST['id']) AND !empty($_POST['id']) AND isset($_POST['modo']) AND !empty($_POST['modo']) AND isset($_POST['message']) AND isset($_POST['note']) AND (!empty($_POST['note']) OR  $_POST['note'] == 0))
	{
	$id = htmlspecialchars($_POST['id']);
	$modo = htmlspecialchars($_POST['modo']);
	$message = htmlspecialchars($_POST['message']);
	$note= htmlspecialchars($_POST['note']);
	$req = $bdd->prepare('INSERT INTO `vote`(`note`, `modo`, `commentaire`, `IdCandidature`) VALUES (:note, :modo, :commentaire, :IdCandidature)');
	$req->execute(array(
	'note' => $note,
	'modo' => $modo,
	'commentaire' => $message,
	'IdCandidature' => $id,
	));
	header('location: candidatures.php');
	} 

else
	{
echo 'Erreur : Il manque un champ.';
echo '<br>';
echo $_POST['id']; 
echo '<br>';
echo $_POST['modo']; 
echo '<br>';
echo $_POST['message']; 
echo '<br>';
echo $_POST['note']; 

	}
?>
