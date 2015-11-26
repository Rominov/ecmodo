<?php
include("connection_bdd.php");

$pwd = $_POST['pwd'];
$mail = $_POST['mail'];
$skype = $_POST['skype'];

if($mail != "" && $skype != "" && $pwd != "")
{
	$sql = "UPDATE modo SET pass='".md5($pwd)."', skype='".$skype."', mail='".$mail."' WHERE nom='".$_COOKIE['connexion']."'";
	$req = $bdd->prepare($sql);
	$req->execute();
}
else if($mail != "" && $skype != "")
{
	$sql = "UPDATE modo SET mail='".$mail."', skype='".$skype."' WHERE nom='".$_COOKIE['connexion']."'";
	$req = $bdd->prepare($sql);
	$req->execute();
}
else if ($mail != "" && $pwd != "") 
{
	$sql = "UPDATE modo SET mail='".$mail."', pass='".md5($pwd)."' WHERE nom='".$_COOKIE['connexion']."'";
	$req = $bdd->prepare($sql);
	$req->execute();
}
else if ($skype != "" && $pwd != "")
{
	$sql = "UPDATE modo SET pass='".md5($pwd)."', skype='".$skype."' WHERE nom='".$_COOKIE['connexion']."'";
	$req = $bdd->prepare($sql);
	$req->execute();
}
else if($skype != "")
{
	$sql = "UPDATE modo SET skype='".$skype."' WHERE nom='".$_COOKIE['connexion']."'";
	$req = $bdd->prepare($sql);
	$req->execute();
	
}
else if($pwd != "")
{
	$sql = "UPDATE modo SET pass='".md5($pwd)."' WHERE nom='".$_COOKIE['connexion']."'";
	$req = $bdd->prepare($sql);
	$req->execute();
}
else if($mail != "")
{
	$sql = "UPDATE modo SET mail='".$mail."' WHERE nom='".$_COOKIE['connexion']."'";
	$req = $bdd->prepare($sql);
	$req->execute();
}

header('Location: index.php');
