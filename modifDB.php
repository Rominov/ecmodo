<?php
include("connection_bdd.php");

$sql="ALTER TABLE modo ADD mail varchar(40), ADD skype varchar(40)";
$req = $bdd->prepare($sql);
$req->execute();

$sql = "SELECT name FROM moderateur";
foreach  ($bdd->query($sql) as $row) {
	$name[] = $row['name'];
}

foreach($name as $row)
{
	//echo $row."<br>";
	$sql = "SELECT mail, skype FROM moderateur WHERE name='".$row."'";
	foreach ($bdd->query($sql) as $row2)
	{
		$mail = $row2['mail'];
		$skype = $row2['skype'];
		
		$sql2 = "UPDATE modo SET mail='".$mail."', skype='".$skype."' WHERE nom='".$row."'";
		$req = $bdd->prepare($sql2);
		$req->execute();
		
		$sql3 = "UPDATE modo SET pass=md5('0000') WHERE nom='".$row."'";
		$req = $bdd->prepare($sql3);
		$req->execute();
		
	}
}