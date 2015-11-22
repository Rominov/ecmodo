<?php
include("connection_bdd.php");
if ( isset($_GET['nom']) AND !empty($_GET['nom']) AND isset($_GET['raison']) AND !empty($_GET['raison']) AND isset($_GET['duree']) AND !empty($_GET['duree']) AND !empty($_GET['tv']) AND isset($_GET['tv']) AND !empty($_GET['modo']) AND isset($_GET['modo'])){
	if ( isset($_GET['premium']) AND !empty($_GET['premium'])) {
		$premium = htmlspecialchars($_GET['premium']);
	} else {
		$premium = 0;
	}
	$nom = htmlspecialchars($_GET['nom']);
	$raison = htmlspecialchars($_GET['raison']);
	$duree = htmlspecialchars($_GET['duree']);
	$duree = $duree * 60 * 60 * 24 ;
	$tv = htmlspecialchars($_GET['tv']);
	$modo = htmlspecialchars($_GET['modo']);
	$date = time() + $duree;
	$idb=0;
	$prem=-1;
	$result = $bdd->prepare("SELECT * FROM bans WHERE user=?");
	$result->execute(array($nom));
	while ($result2 = $result->fetch()){
		$idb = $result2['id'];
		$prem= $result2['premium'];
	}
	if ( $idb == 0 ) {
		$req2 = $bdd->prepare('INSERT INTO `bans` (`user`, `premium`) VALUES (:user, :prem)');
	        $req2->execute(array(
		'user' => $nom,
	        'prem' => $premium
		));
	        $result = $bdd->prepare("SELECT * FROM bans WHERE user=?");
        	$result->execute(array($nom));
        	while ($result2 = $result->fetch()){
        	        $idb = $result2['id'];
        	        $prem= $result2['premium'];
        	}
	}
	if ( $prem != -1 AND $prem!= $premium AND $idb > 0) {
		$req3 = $bdd->prepare('UPDATE `bans` SET `premium` = :prem WHERE id = :id');
                $req3->execute(array(
                'prem' => $premium,
                'id' => $idb
                ));
	}
	$req = $bdd->prepare('INSERT INTO `banTV` (`idBan`, `idTV`, `idRaison`, `duree`, `dateFin`, `idModo`) VALUES (:idb, :idTV, :idR, :du, :date, :mod)');
	$req->execute(array(
	'idb' => $idb,
	'idTV' => $tv,
	'idR' => $raison,
	'du' => $duree,
	'date' => $date,
	'mod' => $modo
	));
	header('location: bans.php');
}


else {
echo 'Erreur : Il manque un champ';
}



?>
