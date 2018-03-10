<!DOCTYPE html>
<HTML>
	<HEAD>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../style.css" />
		<TITLE>Jonathan</TITLE>
	</HEAD>

	<BODY>
		<div id="bloc_page_consommation">
			<header>
				<p>
					<?php
						include("../../bb.php");
						mysql_maj_visites();
					?>
				</p>

				<div id="entete">
					<div class="photo_entete">
						<img src="fichiers/img_20180301_170504_05.jpg">
					</div>
					<div class="element_entete">
						<h1>Consommations d'eau et d'électricité de Jonathan & Jade</h1>
					</div>
				</div>
			</header>

			<section>
				<article>
					<p>
						Aller directement au :
						<ul>
							<li><a href="#jonathan">téléchargement des factures</a></li>
						</ul>
						<br />
					</p>

					<h3 id="graphique_edf" class="electricite">Graphique de la consommation électrique en cours</h3>
					<figure>
			<!--		<img src="fichiers/_consommation_EDF_en_cours_982.png" />-->
						<img src="fichiers/graphique_consommation_EDF_en_cours_1250.png" />
			<!--		<img src="fichiers/graphique_consommation_EDF_en_cours.png" />-->
					</figure>
					<p class="retour_top"><a href="#top">retour en haut de la page</a></p>
				</article>
			</section>

			<section>
				<article>
					<h3 id="jonathan" class="electricite">Factures d'électricité</h3>
					<fieldset class="facture">
						<legend>Factures à régler</legend> <!-- Titre du fieldset --> 
						<ul>
							<li><a href="fichiers/facture_EDF_en_cours.pdf" title="en cours">facture en cours</a></li>
							<li><a href="fichiers/20180301_facture_EDF.pdf" title="1/03/2018">facture du 1/03/2018</a>
							<br />
							<a href="fichiers/20180301_graphique_consommation_EDF.png" title="1/03/2018">graphique de la consommation au 1/03/2018</a></li>
						</ul>
					</fieldset>
				</article>

				<article>
					<h3 id="jonathan" class="eau">Factures d'eau</h3>
					<fieldset class="facture">
						<legend>Factures à régler</legend> <!-- Titre du fieldset --> 
						<ul>
							<li><a href="fichiers/20180306_facture_eau.pdf" title="6/03/2018">facture du 6/03/2018</a></li>
						</ul>
					</fieldset>
				</article>
			</section>

			<section>
				<article>
					<fieldset class="facture">
						<legend>Factures déjà payées</legend> <!-- Titre du fieldset --> 
						<ul>
							<li><a href="fichiers/20180201_facture_EDF.pdf" title="1/02/2018">facture du 1/02/2018</a>
							<br />
							<a href="fichiers/20180201_graphique_consommation_EDF.png" title="1/02/2018">graphique de la consommation au 1/02/2018</a></li>
							<li><a href="fichiers/20180106_facture_EDF.pdf" title="6/01/2018">facture du 6/01/2018</a>
							<br />
							<a href="fichiers/20180106_graphique_consommation_EDF.png" title="6/01/2018">graphique de la consommation au 6/01/2018</a></li>
							<li><a href="fichiers/20171206_facture_EDF.pdf" title="6/12/2017">facture du 6/12/2017</a>
							<br />
							<a href="fichiers/20171206_graphique_consommation_EDF.png" title="6/12/2017">graphique de la consommation au 6/12/2017</a></li>
							<li><a href="fichiers/20171106_facture_EDF.pdf" title="6/11/2017">facture du 6/11/2017</a>
							<br />
							<a href="fichiers/20171106_graphique_consommation_EDF.png" title="6/11/2017">graphique de la consommation au 6/11/2017</a></li>
							<li><a href="fichiers/20171006_facture_EDF.pdf" title="6/10/2017">facture du 6/10/2017</a> (2 mois)
							<br />
							<a href="fichiers/20171006_graphique_consommation_EDF.png" title="6/10/2017">graphique de la consommation au 6/10/2017</a></li>
						</ul>
					</fieldset>
				</article>

				<article>
					<fieldset class="facture">
						<legend>Factures déjà payées</legend> <!-- Titre du fieldset --> 
						<ul>
							<li><a href="fichiers/20180204_facture_eau.pdf" title="4/02/2018">facture du 4/02/2018</a></li>
							<li><a href="fichiers/20171130_facture_eau.pdf" title="30/11/2017">facture du 30/11/2017</a></li>
						</ul>
					</fieldset>
				</article>
			</section>
			<p class="retour_top"><a href="#top">retour en haut de la page</a></p>
		</div>
	</BODY>
</HTML>
