<?php
include("connection_bdd.php");

$name = $_POST['login'];
$pwd = $_POST['password'];

$sql = "SELECT pass FROM modo WHERE nom= '".$name."'";
foreach  ($bdd->query($sql) as $row) {
	$pass = $row['pass'];
}

if (md5($pwd) == $pass){
	
	setcookie("connexion",$name);
	header('location: index.php');
}
else
{
	echo "La connexion à échoué. La correspondance identifiant/mot de passe semble incorrecte. Tentez de vous reconnecter a nouveau.";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	echo "<a href='recuppwd.php'>Récupérer votre mot de passe</a>";
}
