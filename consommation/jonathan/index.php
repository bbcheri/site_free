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
							<li><a href="#facture_edf_en_cours">téléchargement des factures</a></li>
							<li><a href="#sommes_versees">tableau des sommes versées</a></li>
						</ul>
						<br />
					</p>

					<h2 id="graphique_edf_en_cours" class="electricite"> <a href="fichiers/graphique_consommation_EDF_en_cours.png" title="en cours"> <img src="/images/eclair_37x58.png"> Graphique de la consommation électrique en cours</a> </h2>
					<br />

					<figure>
			<!--		<img src="fichiers/_consommation_EDF_en_cours_982.png" />-->
						<img src="fichiers/graphique_consommation_EDF_en_cours_1250.png" />
			<!--		<img src="fichiers/graphique_consommation_EDF_en_cours.png" />-->
					</figure>
					<br />

					<p class="retour_top"><a href="#top">retour en haut de la page</a></p>

					<h2 id="facture_edf_en_cours" class="electricite"> <a href="fichiers/facture_EDF_en_cours.pdf" title="en cours"> <img src="/images/eclair_37x58.png"> Facture d'électricité en cours</a> </h2>
					<br />

					<p class="retour_top"><a href="#top">retour en haut de la page</a></p>
				</article>
			</section>

			<section>
				<article>
					<h2 id="facture_edf" class="electricite_400"> <img src="/images/eclair_37x58.png"> Factures d'électricité</h2>
					<br />

					<fieldset class="facture">
						<legend>Factures à régler</legend> <!-- Titre du fieldset -->
						<ul>
							<li><a href="fichiers/20180301_facture_EDF.pdf" title="1/03/2018">facture du 01/03/2018</a> &emsp; &emsp; &emsp; &emsp; (92,19 €)
							<br />
							<a href="fichiers/20180301_graphique_consommation_EDF.png" title="1/03/18">graphique de la consommation au 01/03/2018</a></li>
						</ul>
					</fieldset>
				</article>

				<article>
					<h2 id="facture_eau" class="eau_400"> <img src="/images/robinet_eau_58x58.png"> Factures d'eau</h2>
					<br />

					<fieldset class="facture">
						<legend>Factures à régler</legend> <!-- Titre du fieldset --> 
						<ul>
							<li><a href="fichiers/20180306_facture_eau.pdf" title="6/03/2018">facture du 06/03/2018</a> &emsp; &emsp; &emsp; &emsp; (16,69 €) </li>
						</ul>
					</fieldset>
				</article>
			</section>

			<section>
				<article>
					<fieldset class="facture">
						<legend>Factures déjà payées</legend> <!-- Titre du fieldset --> 
						<ul>
							<li><a href="fichiers/20180201_facture_EDF.pdf" title="1/02/2018">facture du 01/02/2018</a> &emsp; &emsp; &emsp; &emsp; (90,31 €)
							<br />
							<a href="fichiers/20180201_graphique_consommation_EDF.png" title="1/02/2018">graphique de la consommation au 01/02/2018</a> </li>
							<li><a href="fichiers/20180106_facture_EDF.pdf" title="6/01/2018">facture du 06/01/2018</a> &emsp; &emsp; &emsp; &emsp; (221,92 €)
							<br />
							<a href="fichiers/20180106_graphique_consommation_EDF.png" title="6/01/2018">graphique de la consommation au 06/01/2018</a> </li>
							<li><a href="fichiers/20171206_facture_EDF.pdf" title="6/12/2017">facture du 06/12/2017</a> &emsp; &emsp; &emsp; &emsp; (103,44 €)
							<br />
							<a href="fichiers/20171206_graphique_consommation_EDF.png" title="6/12/2017">graphique de la consommation au 06/12/2017</a> </li>
							<li><a href="fichiers/20171106_facture_EDF.pdf" title="6/11/2017">facture du 06/11/2017</a> &emsp; &emsp; &emsp; &emsp; (43,11 €)
							<br />
							<a href="fichiers/20171106_graphique_consommation_EDF.png" title="6/11/2017">graphique de la consommation au 06/11/2017</a> </li>
							<li><a href="fichiers/20171006_facture_EDF.pdf" title="6/10/2017">facture du 06/10/2017</a> (2 mois) &emsp; (98,15 €)
							<br />
							<a href="fichiers/20171006_graphique_consommation_EDF.png" title="6/10/2017">graphique de la consommation au 06/10/2017</a> </li>
						</ul>
					</fieldset>
				</article>

				<article>
					<fieldset class="facture">
						<legend>Factures déjà payées</legend> <!-- Titre du fieldset --> 
						<ul>
							<li><a href="fichiers/20180204_facture_eau.pdf" title="4/02/2018">facture du 04/02/2018</a> &emsp; &emsp; &emsp; &emsp; (50,07 €)</li>
							<li><a href="fichiers/20171130_facture_eau.pdf" title="30/11/2017">facture du 30/11/2017</a> &emsp; &emsp; &emsp; &emsp; (68,85 €)</li>
						</ul>
					</fieldset>
				</article>
			</section>

			<p class="retour_top"><a href="#top">retour en haut de la page</a></p>

			<section>
				<article>
					<h2 id="sommes_versees" class="electricite">Total des sommes versées</h2>
					<br />
					<table>
					   <caption></caption>

					   <thead> <!-- En-tête du tableau -->
						   <tr>
							   <th>Somme</th>
							   <th>versée le</th>
							   <th>facture</th>
							   <th>date facture</th>
							   <th>montant consommations</th>
						   </tr>
					   </thead>

<!--					   <tfoot> <!-- Pied de tableau -->
<!--						   <tr>
							   <th>Nom</th>
							   <th>Âge</th>
							   <th>Pays</th>
						   </tr>
					   </tfoot>-->

					   <tbody> <!-- Corps du tableau -->
						   <tr>
							   <td rowspan="2">150 €</td>
							   <td rowspan="2">23/02/2018</td>
							   <td> <img src="/images/robinet_eau_58x58.png"> eau</td>
							   <td>4/02/2018</td>
							   <td>50,07 €</td>
						   </tr>
						   <tr>
							   <td> <img src="/images/eclair_37x58.png"> électricité</td>
							   <td>1/02/2018</td>
							   <td>88,38 €</td>
						   </tr>
						   <tr>
							   <td rowspan="2">220 €</td>
							   <td rowspan="2">23/01/2018</td>
							   <td> <img src="/images/eclair_37x58.png"> électricité</td>
							   <td>6/01/2018</td>
							   <td>118,48 €</td>
						   </tr>
						   <tr>
							   <td> <img src="/images/eclair_37x58.png"> électricité</td>
							   <td>6/12/2017</td>
							   <td>106,48 €</td>
						   </tr>
						   <tr>
							   <td rowspan="2">115 €</td>
							   <td rowspan="2">22/12/2017</td>
							   <td> <img src="/images/robinet_eau_58x58.png"> eau</td>
							   <td>30/11/2017</td>
							   <td>68,85 €</td>
						   </tr>
						   <tr>
							   <td> <img src="/images/eclair_37x58.png"> électricité</td>
							   <td>6/11/2017</td>
							   <td>44,96 €</td>
						   </tr>
						   <tr>
							   <td>100 €</td>
							   <td>16/10/2017</td>
							   <td> <img src="/images/eclair_37x58.png"> électricité</td>
							   <td>6/10/2017</td>
							   <td>98,15 €</td>
						   </tr>
						   <tr>
							   <td><strong>585 €</strong></td>
							   <td colspan="3"><strong><center>TOTAL</center></strong></td>
							   <td><strong>575,37 €</strong></td>
						   </tr>
					   </tbody>
					</table>
				</article>
			</section>
			
			<p class="retour_top"><a href="#top">retour en haut de la page</a></p>
		</div>
	</BODY>
</HTML>
