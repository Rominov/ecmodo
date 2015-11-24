<?php
include("connection_bdd.php");

$pwd = $_POST['pwd'];
$mail = $_POST['mail'];
$skype = $_POST['skype'];

if($mail != "" && $skype != "")
{
	$sql = "UPDATE modo SET mail='".$mail."', skype='".$skype."' WHERE nom='".$_COOKIE['connexion']."'";
	$req = $bdd->prepare($sql);
	$req->execute();
}
else if($skype != "")
{
	$sql = "UPDATE modo SET skype='".$skype."' WHERE nom='".$_COOKIE['connexion']."'";
	$req = $bdd->prepare($sql);
	$req->execute();
	
}

header('Location: index.php');
