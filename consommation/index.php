<!DOCTYPE html>
<HTML>
	<HEAD>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
		<TITLE>Consommations</TITLE>
	</HEAD>

	<BODY>
		<div id="bloc_page">
			<header>
				<p>
					<?php
						include("../bb.php");
						mysql_maj_visites();
					?>
				</p>

				<div id="entete">
					<div class="photo_entete">
						<img src="/images/img_20170827_103546_005.jpg">
					</div>
					<div class="element_entete">
						<div id="titre_et_liens_entete">
							<div id="titre_entete">
								<h1>Consommations d'eau et d'électricité</h1>
							</div>
							<div id="liens_entete">
								<nav>
									<ul>
										<li><a href="/consommation/maxime/index.php" target="_blank">Maxime</li>
										<li><a href="/consommation/marie/index.php" target="_blank">Marie</li>
										<li><a href="/consommation/jonathan/index.php" target="_blank">Jonathan</li>
										<li><a href="/consommation/index.php">consommation</a></li>
										<li><a href="/autre/index.php">ailleurs</a></li>
										<li><a href="/index.php">Accueil</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>

			<section>
				<article>
					<p>
						Aller directement aux :
						<ul>
							<li><a href="#jonathan">consommations d'eau et d'électricité de Jonathan</a></li>
							<li><a href="#marie">consommations d'eau de Marie</a></li>
							<li><a href="#maxime">consommations d'eau de Maxime</a></li>
						</ul>
					</p>
				</article>
			</section>
		
			<hr> <!-- ligne de séparation -->

			<section>
				<article>
					<h2 id="liens_html">Sites sur le HTML</h2>
					<p>
						Site pour apprendre à faire des sites WEB <a href="https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3/creer-des-liens" target="_blank">https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3/creer-des-liens</a><br />
						<a href="https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3/memento-des-balises-html" target="_blank">Mémento des balises HTML</a> sur le même site que j'aime bien
						<br />
						<a href="http://www.codeshttp.com/baliseh.htm" target="_blank">Liste complète des balises HTML avec description</a>
						<br />
						<a href="https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3/structurer-sa-page" targer="_blank">Structurer sa page</a>
						<br />
						<a href="https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3/creation-d-apparences-dynamiques" target="_blank">Création d'apparences dynamiques</a>
					</p>
					<p>
						Site pour redimensionner les images : <a href="http://resizeimage.net/" target="_blank">http://resizeimage.net/</a>
						<br />
						Site pour trouver l’équivalence entre une couleur et le code hexadécimal : <a href="http://www.color-hex.com/" target="_blank">http://www.color-hex.com/</a>
						<br />
						(URL donné sur <a href="https://www.notuxedo.com/creer-texte-encadre/" target="_blank">https://www.notuxedo.com/creer-texte-encadre/<a/>)
					</p>
					<p>
						<br />
						Gérez votre code avec Git et GitHub :
						<br />
						<a href="https://openclassrooms.com/courses/gerer-son-code-avec-git-et-github" target="_blank">https://openclassrooms.com/courses/gerer-son-code-avec-git-et-github</a>
						<br />
						GitHub est un service en ligne qui permet d'héberger ses repositories de code: <a href="https://github.com/" targer="_blank">https://github.com/</a>
						<br />
					</p>
					<p>
						<br />
						Comment faire un cadre :
						<br />
						<a href="http://jardinoscope.canalblog.com/archives/2006/04/01/22814401.html" target="_blank">http://jardinoscope.canalblog.com/archives/2006/04/01/22814401.html</a>
						<br />
						<a href="https://funnycat.jimdo.com/astuces-jimdo/cadre-esth%C3%A9tique/" target="_blank">https://funnycat.jimdo.com/astuces-jimdo/cadre-esth%C3%A9tique/</a>
						<br />
						<a href="https://www.notuxedo.com/creer-texte-encadre/" target="_blank">https://www.notuxedo.com/creer-texte-encadre/</a>
					</p>
					<p>
						<br />
						Administrer le site :
						<br />
						Pour se connecter à la base mySql : <a href="http://sql.free.fr/phpMyAdmin/" target="_blank">http://sql.free.fr/phpMyAdmin/</a>
						(Serveur: bernard.berenguier.sql.free.fr)
						<br />
						Pour se connecter à l'Espace Abonné Freebox: <a href="https://subscribe.free.fr/login/" target="_blank">https://subscribe.free.fr/login/</a>
						<br />
						Utiliser FileZilla en paramétrant l'hôte comme "ftpperso.free.fr" l'identifiant bb.
						<br />
						Sinon, en dernier recours, se connecter à <a href="http://ftpperso.free.fr/" target="_blank">http://ftpperso.free.fr/</a>
						<br />
						GitHub est un service en ligne qui permet d'héberger ses repositories de code: <a href="https://github.com/" targer="_blank">https://github.com/</a>
						<br />
						un bon site sur git : <a href="https://buzut.fr/git-en-2-2/" target="_blank">https://buzut.fr/git-en-2-2/</a>
						<br />
						 le lien a renseigner dans git : https://github.com/bbcheri/site_free.git =>
						<br />
						(git remote add origin https://github.com/bbcheri/site_free.git)
						<br />
						"git push -u origin master" peut engendrer l'erreur "error: failed to push some refs to 'https://github.com/bbcheri/site_free.git'
						hint: Updates were rejected because the tip of your current branch is behind
						<br />
						=> "git push -f origin master"
						<br />
						"git filter-branch --tree-filter 'rm -f ./.htaccess' HEAD" peut engendrer l'erreur "Cannot create new backup. A previous backup already exists in refs/original/"
						, il faudra forcer la commande avec l’option -f : git filter-branch -f […]
						<br />
						=> "git filter-branch -f --tree-filter 'rm -f ./.htaccess' HEAD"
						<br />
					</p>
					<p>
						<br />
						Liste des casses qui récupèrent les auto pour la destruction: <a href="http://www.bouches-du-rhone.gouv.fr/Demarches-administratives/Autres-demarches/Traitement-des-vehicules-hors-d-usage-VHU">http://www.bouches-du-rhone.gouv.fr/Demarches-administratives/Autres-demarches/Traitement-des-vehicules-hors-d-usage-VHU</a>
						<br />
					</p>
		
					<hr> <!-- ligne de séparation -->

					<center><h2 id="jonathan"><a href="/consommation/jonathan/index.php" target="_blank">Consommations d'eau et d'électricité de Jonathan</a></h2></center>

					<h3 id="jonathan" class="electricite">Graphiques des consommations d'électricité en cours</h3>
					<p>
						L'image "graphique_consommation_EDF_en_cours.png" a une dimension de 1786x674 pixels.<br />
						Sur le site <a href="http://resizeimage.net/" target="_blank">http://resizeimage.net/</a>, pour passer à une dimension de :
						<ul class="cadre">
							<li>982x371 pixels, il faut appliquer une proportion de 55% (nom du fichier "graphique_consommation_EDF_en_cours_982.png")</li>
							<li>1250x472 pixels, il faut appliquer une proportion de 70% (nom du fichier "graphique_consommation_EDF_en_cours_1250.png")</li>
						</ul>
					</p>
				</article>
			</section>

			<section>
				<article>
					<h3 id="jonathan" class="electricite">Factures d'électricité de Jonathan</h3>
					<fieldset class="facture">
						<legend>Factures à régler</legend> <!-- Titre du fieldset --> 
						<ul>
							<li><a href="jonathan/fichiers/facture_EDF_en_cours.pdf" title="en cours" target="_blank">facture en cours</a></li>
							<li><a href="jonathan/fichiers/20180301_facture_EDF.pdf" title="1/03/18" target="_blank">facture du 1/03/2018</a>
							<br />
							<a href="jonathan/fichiers/20180301_graphique_consommation_EDF.png" title="1/03/18" target="_blank">graphique de la consommation au 1/03/2018</a></li>
						</ul>
					</fieldset>
				</article>

				<article>
					<h3 id="jonathan" class="eau">Factures d'eau de Jonathan</h3>
					<fieldset class="facture">
						<legend>Factures à régler</legend> <!-- Titre du fieldset --> 
						<ul>
							<li><a href="jonathan/fichiers/20180306_facture_eau.pdf">facture d'eau du 6/03/2018</a></li>
						</ul>
					</fieldset>
				</article>
			</section>

			<section>
				<article>
					<fieldset class="facture">
						<legend>Factures déjà payées</legend> <!-- Titre du fieldset --> 
						<ul>
							<li><a href="jonathan/fichiers/20180201_facture_EDF.pdf" title="1/02/18" target="_blank">facture du 1/02/2018</a>
							<br />
							<a href="jonathan/fichiers/20180201_graphique_consommation_EDF.png" title="1/02/18" target="_blank">graphique de la consommation au 1/02/2018</a></li>
							<li><a href="jonathan/fichiers/20180106_facture_EDF.pdf" title="6/01/18" target="_blank">facture du 6/01/2018</a>
							<br />
							<a href="jonathan/fichiers/20180106_graphique_consommation_EDF.png" title="6/01/18" target="_blank">graphique de la consommation au 6/01/2018</a></li>
							<li><a href="jonathan/fichiers/20171206_facture_EDF.pdf" title="6/12/17" target="_blank">facture du 6/12/2017</a>
							<br />
							<a href="jonathan/fichiers/20171206_graphique_consommation_EDF.png" title="6/12/17" target="_blank">graphique de la consommation au 6/12/2017</a></li>
							<li><a href="jonathan/fichiers/20171106_facture_EDF.pdf" title="6/11/17" target="_blank">facture du 6/11/2017</a>
							<br />
							<a href="jonathan/fichiers/20171106_graphique_consommation_EDF.png" title="6/11/17" target="_blank">graphique de la consommation au 6/11/2017</a></li>
							<li><a href="jonathan/fichiers/20171006_facture_EDF.pdf" title="6/10/17" target="_blank">facture du 6/10/2017</a> (2 mois)
							<br />
							<a href="jonathan/fichiers/20171006_graphique_consommation_EDF.png" title="6/10/17" target="_blank">graphique de la consommation au 6/10/2017</a></li>
						</ul>
					</fieldset>
				</article>
				
				<article>
					<fieldset class="facture">
						<legend>Factures déjà payées</legend> <!-- Titre du fieldset --> 
						<ul>
							<li><a href="jonathan/fichiers/20180204_facture_eau.pdf">facture du 4/02/2018</a></li>
							<li><a href="jonathan/fichiers/20171130_facture_eau.pdf">facture du 30/11/2017</a></li>
						</ul>
					</fieldset>
				</article>
			</section>
			<p class="retour_top"><a href="#top">retour en haut de la page</a></p>

			<section>
				<article>
					<center><h2 id="marie" class="eau"><a href="/consommation/marie/index.php" target="_blank">Consommations d'eau de Marie</a></h2></center>
					<ul class="facture">
						<li><a href="marie/20180105_facture_eau.pdf" target="_blank">facture d'eau du 05/01/2018</a></li>
						<li><a href="marie/20171012_facture_eau.pdf" target="_blank">facture d'eau du 12/10/2017</a></li>
						<li><a href="marie/20170314_facture_eau.pdf" target="_blank">facture d'eau du 14/03/2017</a></li>
						<li><a href="marie/20161102_facture_eau.pdf" target="_blank">facture d'eau du 02/11/2016</a></li>
						<li><a href="marie/20160627_facture_eau.pdf" target="_blank">facture d'eau du 27/06/2016</a></li>
						<li><a href="marie/20160302_facture_eau.pdf" target="_blank">facture d'eau du 02/03/2016</a></li>
						<li><a href="marie/20151204_facture_eau.pdf" target="_blank">facture d'eau du 04/12/2015</a></li>
					</ul>
					<p class="retour_top"><a href="#top">retour en haut de la page</a></p>
				</article>
			</section>

			<section>
				<article>
					<center><h2 id="maxime" class="eau"><a href="/consommation/maxime/index.php" target="_blank">Consommations d'eau de Maxime</a></h2></center>
					<ul class="facture">
						<li><a href="maxime/20171130_facture_eau.pdf" target="_blank">facture d'eau du 30/11/2017</a></li>
						<li><a href="maxime/20170520_facture_eau.pdf" target="_blank">facture d'eau du 20/05/2017</a></li>
						<li><a href="maxime/20161111_facture_eau.pdf" target="_blank">facture d'eau du 11/11/2016</a></li>
						<li><a href="maxime/20160601_facture_eau.pdf" target="_blank">facture d'eau du 01/06/2016</a></li>
					</ul>
					<p class="retour_top"><a href="#top">retour en haut de la page</a></p>
				</article>
			</section>

			<footer>
				<h1>Merci de votre venue...</h1>
			</footer>
		</div>
	</BODY>
</HTML>
