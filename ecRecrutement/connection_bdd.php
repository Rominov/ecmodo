<?php
try
{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=ecmodov3', 'root', '7ip94b16');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>
