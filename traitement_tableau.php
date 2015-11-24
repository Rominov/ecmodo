<?php
session_start();
include("connection_bdd.php");

echo troll;
$aff = $bdd->prepare('SELECT * FROM bans, banTV  WHERE bans.id=banTV.idBan and datefin > ? group by bans.id ORDER BY ? ASC');
echo kékete;
$aff->execute(array(time(), $_POST['triage']));
$_SESSION['aff'] = $aff;

header('Location: bans.php');
?>