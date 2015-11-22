<?php
include("connection_bdd.php");
date_default_timezone_set('Europe/Amsterdam');
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Mod&eacute;ration Eclypsia - Protocole</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 

	<link rel="icon" href="http://static.eclypsia.com/public/templates/images/ico/fav_icon_2.png">	

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="./css/font-awesome.css" rel="stylesheet">
    
    <link href="./css/default.css" rel="stylesheet">
    <link href="./css/default-responsive.css" rel="stylesheet">
    
    <link href="./css/dashboard.css" rel="stylesheet">   

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

<body>

<?php include('navbar.php');?>
   
<!-- Tableau d'affichage des modÃ©rateurs, de leurs mail et skype --> 
<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<ul class="breadcrumb">
						<li><h3><a href="http://ec.kriissss.fr/"><img src="http://static.eclypsia.com/images/logo_eclypsia.png" HEIGHT="150" WIDTH="150" BORDER="0"></a> <span class="divider">> </span></h3></li>
						<li class="active"><h3>Protocole</h3></li>
					</ul>
					<br><center><h1>Protocole de la Mod&eacute;ration Eclypsia :</h1></center>
					<div class="widget widget-table action-table">
					</div> <!-- /widget-header -->
					<div class="widget-content">
					<i>Sommaire (Cliquez pour naviguer):</i>
					
					<FONT COLOR="#0404B4"><br><br> <h3><a href="#chat">- Le Chat</a>
					<br><a href="#commentaire">- Les Commentaires</a>
					<br><a href="#forum">- Le Forum</font></a></h3>
					</div>
					<br><br>
									<div class="widget-content">
										<br><center><h2><FONT COLOR="#0404B4"><strong><u><div id="chat">Le Chat :</strong></u></font></h2></center>
										<br><h3><FONT COLOR="#610B0B"><strong><u>A. Ligne Directrice :</strong></u></font></h3>
										<br>
										<br><strong><FONT COLOR="#380B61">La modération est avant tout un travail de médiation.</strong></font> Votre rôle principal sera essentiellement informatif. Répondre aux questions des viewers, informer des différents changements et annonces sur le site. Mettre à jour le topic. Prévenir le staff en cas de problème technique. Etc…
										<br>
										<br>Votre second rôle, et non moins important, sera <strong><FONT COLOR="#380B61">d’animer le chat. </font></strong>Participer de temps en temps aux discutions, redynamiser le chat pendant les temps morts, mettre les liens demandés par le streameur sur le chat (si vous les avez ou pouvez les obtenir) et <strong><FONT COLOR="#380B61">publier leurs réseaux sociaux</font>
										<br>
											<ul>
													<li><FONT COLOR="#380B61">En début et en fin de stream.
													<li>En début et en fin de pause.
													<li>Si le streameur le demande ou fait référence à l’un de ses réseaux.
													<li>Si un viewer le demande.</strong></font>
											</ul>
										N’oubliez pas, même si ça paraît anodin ou inefficace, il est très important de publier ces réseaux. En cas d’émissions, il faut publier le facebook de l’émission ou alors les différents réseaux sociaux de leurs participants (distillés petit à petit, pas en un bloc).
										<br><br>
										Votre troisième tâche sera d’<strong><FONT COLOR="#380B61">assurer le bon fonctionnement du chat et de le conserver lisible</strong></font> et agréable aussi bien pour les utilisateurs que le/les streameurs. N’oubliez pas que votre façon de modérer doit être en adéquation avec l’ambiance voulue par le streameur, ainsi que l’agitation/activité/ambiance développée sur le chat. Si le chat est calme ou au moins non “dissident”, vous pouvez alléger votre façon de modérer (sanctionner moins, rappeler plus) et inversément.
										<br><br><h4><FONT COLOR="#FF0000">Être moins strict ne veut pas dire être inactif! Vous pouvez passez par exemple du kick au simple message de rappel+suppression du message du viewer, mais pas ne rien faire du tout.</font></h4>
										<br><br><h3><FONT COLOR="#610B0B"><b><u>B. Tableau des sanctions :</b></u></font></h3>
										<br><br>
																<table class="table table-bordered">
																<tbody>
																<tr>
																	<th><strong>Raison</strong></th>
																	<th><strong>Durée</strong></th>
																</tr>
																<tr>
																	<td><strong><FONT COLOR="#FF0000">Comportement Abusif / Harcèlement</font></strong></td>
																	<td><strong><FONT COLOR="#0E6404">Ban de 1 semaine à 1 mois</font></td></strong>
																</tr>
																<tr>
																	<td><strong><FONT COLOR="#FF0000">Caps / Spam</font></strong></td>
																	<td><strong><FONT COLOR="#0E6404">Avertissement/kick - ban [durée du Live] - ban 1 jour</td></font></strong>
																</tr>
																<tr>
																	<td><strong><FONT COLOR="#FF0000">Flood</font></strong></td>
																	<td><strong><FONT COLOR="#0E6404">Avertissement/kick - slow - ban 1 jour</td></font></strong>
																</tr>
																<tr>
																	<td><strong><FONT COLOR="#FF0000">Incitation à [  ]</font></strong></td>
																	<td><strong><FONT COLOR="#0E6404">Même sanction que ladite infraction</td></font></strong>
																</tr>
																<tr>
																	<td><strong><FONT COLOR="#FF0000">Provocations / Flame</font></strong></td>
																	<td><strong><FONT COLOR="#0E6404">A gérer au cas par cas</td></font></strong>
																</tr>
																<tr>
																	<td><strong><FONT COLOR="#FF0000">Publicité</font></strong></td>
																	<td><strong><FONT COLOR="#0E6404">Ban de 1 jour à  1 semaine</td></font></strong>
																</tr>
																<tr>
																	<td><strong><FONT COLOR="#FF0000">Spoil</font></strong></td>
																	<td><strong><FONT COLOR="#0E6404">Ban de 1 jour à  1 semaine</td></font></strong>
																</tr>
																<tr>
																	<td><strong><FONT COLOR="#FF0000">Insultes</font></strong></td>
																	<td><strong><FONT COLOR="#0E6404">Ban de 1 jour à  1 semaine</td></font></strong>
																</tr>
																<tr>
																	<td><strong><FONT COLOR="#FF0000">Pseudo Inconvenant</font></strong></td>
																	<td><strong><FONT COLOR="#0E6404">Explication + kick - ban 1 jour</td></font></strong>
																</tr>
																<tr>
																	<td><strong><FONT COLOR="#FF0000">Pseudo Insultant</font></strong></td>
																	<td><strong><FONT COLOR="#0E6404">Ban 1 semaine à  1 mois</td></font></strong>
																</tr>
															</tbody>
															</table>
										<br>
										<FONT COLOR="#0404B4">Ceci est un <strong>schéma-type de la sanction sur le chat.</strong> En fonction de l'acitvité/ambiance de celui-ci, de la virulence des propos émis, de la récidive ou non de l’infraction, ou même de la multiplicité de celles-ci, la durée et<strong> la sévérité de la sanction peut augmenter. </strong>Cependant Il faut veiller à toujours agir selon les critères de références !! </font>
										<br>
										<i>Par exemple, pour une insulte, la durée de base est un jour, mais celle-ci peut monter sur plusieurs jours, voire une semaine (deux grand max) (avec tarif supplémentaire si insulte envers streameur). <FONT COLOR="#FF0000">Mais ne commencez pas à ban à outrance !!</font>
										<br>
										Pour une inuslte envers un streameur, en caps lock, proférée à de multiples reprises, avec provocations envers les modos (circonstances aggravantes: provocation, caps lock, récidive, attaque envers le streameur), on peut monter jusqu’à un mois, voir deux.
										<br>
										<FONT COLOR="#FF0000">Pour tout comportement nuisant à la bonne ambiance du chat, évocation de sujet ou débat entrainant des tensions, demander d’abord à la ou les personnes concernées de bien vouloir arrêter. Si elles persistent un simple kick - ban 1 jour suffit.</i></font>
										<br><br><h3><FONT COLOR="#610B0B"><b><u>C. Liste sommaire des commandes :</b></u></font></h3>
										<br>
										<br><strong><FONT COLOR="#5F4C0B">/ban [durée] “Username” [motif] - banni l’utilisateur (ADMIN uniquement)</strong></font>
										<br>Flags:
										<br>h/d/m - pour bannir soit en heures, en jours, ou en mois; avec un nombre allant de 1 à 999
										<br>s - permet de supprimer tous les messages de l'utiilisateur en même temps que son ban.
										<br>[motif] - Raison du ban
										<br><strong><FONT COLOR="#5F4C0B">/deban “Username” - Annule le ban appliqué à l’utilisateur (ADMIN uniquement)</strong></font>

										<br><br><strong><FONT COLOR="#5F4C0B">/kick “Username” [motif] - kick l’utilisateur</strong></font>
										<br>s - permet de supprimer tous les messages de l'utilisateur en même temps que son kick.

										<br><br><strong><FONT COLOR="#5F4C0B">/slow “Username” [secondes] - applique un slow mode à l’utilisateur </strong></font>
										<br>Flags:
										<br>[seconds] - définit l’intervalle de temps entre deux messages avant que l’utilisateur ne puisse reparler.

										<br><br><strong><FONT COLOR="#5F4C0B">/slowroom [durée] [secondes] - applique un slow mode à tout le salon </strong></font>
										<br>Flags:
										<br>h/d/m - définit la durée durant laquelle la salle sera en slow mode, avec comme variable un nombre allant de 1 à 999.
										<br>[seconds] - définit l’intervalle de temps entre deux messages avant que l’utilisateur ne puisse reparler.

										<br><br><strong><FONT COLOR="#5F4C0B">/mute - active la fonction mute du chat. (ADMIN uniquement)</strong>
										<br><strong>/unmute - désactive la fonction mute du chat. (ADMIN uniquement)</strong>		
										
										<br><br><strong>/submode - active la fonction submode du chat. (ADMIN uniquement)</strong>
										<br><strong>/unsubmode - désactive la fonction submode du chat. (ADMIN uniquement)</strong></font>
										
										<br><br><strong><FONT COLOR="#5F4C0B">/setright "Username" m - élève l'utilisateur au rang de MOD (ADMIN uniquement)
										<br>/setright "Username" a - élève l'utilisateur au rang de MOD (SADMIN uniquement)
										<br>/setright "Username" s - élève l'utilisateur au rang de MOD (SADMIN uniquement)
										<br>/setright "Username" u - élève l'utilisateur au rang de MOD (ne fonctionne pas sur un utilisateur de rang supérieur ou égal au votre)</font>

										<br><br><FONT COLOR="#5F4C0B">/set - Crée votre propre set. (ADMIN uniquement)</strong></font>
										<br><i>Les sets sont des messages préprogrammés encodés dans le chat, qui s’utilise via une commande raccourci. Pour en créer être minimum au rand ADMIN.</i>
										<br> <strong><FONT COLOR="#5F4C0B">/set /nomdelacommande=”message personnalisé du set” - Crée un message pré-enregistré</strong></font>
										<br><i>Exemple 1 : /set /facebook=”Rejoignez moi sur Facebook ! http://www.facebook.com/nomdufacebook”
										<br>Et quand vous écrirez /facebook dans le salon, les utilisateurs ne verront que : Rejoignez moi sur Facebook ! http://www.facebook.com/nomdufacebook
										<br>Exemple 2 : /set /rappel=”Rappel: les majuscules, le spam, le flood, les copier/coller, le flame, les liens et le spoil ne sont pas autorisés sur le chat et seront puni si nécessaire par les modérateurs.”
										<br>Et vous obtiendrez : Rappel: les majuscules, le spam, le flood, les copier/coller, le flame, les liens et le spoil ne sont pas autorisés et seront puni d'un kick ou d'un ban à la discrétion des modérateurs.</i>

										<br><br><strong><i>NB : il <b><FONT COLOR="#FF0000">n’y a pas d’espace</b></font> entre le /nomdelacommande le = et le “.
										<br>A savoir également que les sets ne servent que pour afficher un message et non une commande (comme le kick ou le ban).
										<br>NB 2 :  Il est possible d’afficher des messages en couleurs, pour cela il faut encadrer son messages par les caractères “ [color=#XXXXXX] [/color] ” (le chat utilise le codage couleur HTML, allant de 0,1,2... à 9,A,B,...F. Le rouge est FF0000, le bleu 0000FF et le vert 00FF00).</strong></i>
										
										<br><br><strong><FONT COLOR="#5F4C0B">/unset /nomdelacommande - supprime le set sélectionné (ADMIN uniquement)</strong>
										<br><strong>/clearset - supprime tous les sets de ce chat (SADMIN uniquement) </strong>

										<br><br><strong>/showbanned - Montre la liste des utilisateurs bans et pour quelle durée</strong></font>
										<br>Vous permet de voir la liste des utilisateurs bannis de votre salon.

										<br><br><strong><FONT COLOR="#5F4C0B">/showslowed - Montre la liste des utilisateurs sous slow mode</strong></font>
										<br>Pour voir la liste des personnes ayant un slow mode sur votre salon.

										<br><br><strong><FONT COLOR="#5F4C0B">/showsets - Montre la liste des sets enregistrés sur ce salon</strong></font>
										<br>Pour voir la liste des commandes personnalisées que vous avez enregistré (on y reviendra).

										<br><br><strong><FONT COLOR="#5F4C0B">/welcome - Change le titre du chat, de base il affiche “Bienvenue sur le chat Eclypsia!”</strong></font>
										<br>Pour changer le titre (ou topic) du salon. 
										<br>Exemple : /welcome Bienvenue sur le salon de la TV1 Eclypsia ! Actuellement du League of Legends

										<br><br><strong><FONT COLOR="#5F4C0B">/commands - Montre la liste des commandes</strong></font>
								
										<br><br><br><br><p align="right"><a href="#">Haut de Page</a></p>
										<br><center><h2><FONT COLOR="#0404B4"><strong><u><div id="commentaire">Les Commentaires :</strong></u></font></h2></center>
										<br><center><h2><FONT COLOR="#0404B4"><strong><u><div id="forum">Le Forum :</strong></u></font></h2></center>
										
								
										
										
										
									

					</div> <!-- /widget-content -->
							</tbody>
						</table>
					</div> <!-- /widget-content -->
				</div> <!-- /span12 -->     	
			</div> <!-- /row -->
		</div> <!-- /container -->
	</div> <!-- /main-inner -->
</div> <!-- /main -->

<!-- Footer -->
    			</div> <!-- /span12 -->
    		</div> <!-- /row -->
<?php include('foo.php');?>
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./js/jquery.js"></script>
<script src="./js/excanvas.min.js"></script>
<script src="./js/jquery.flot.js"></script>
<script src="./js/jquery.flot.pie.js"></script>
<script src="./js/jquery.flot.orderBars.js"></script>
<script src="./js/jquery.flot.resize.js"></script>


<script src="./js/bootstrap.js"></script>
<script src="./js/base.js"></script>

<script src="./js/area.js"></script>
<script src="./js/donut.js"></script>

  </body>
</html>
