<!DOCTYPE html>
<HTML>
	<HEAD>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../style.css" />
		<TITLE>Maxime</TITLE>
	</HEAD>

	<BODY>
		<div id="bloc_page">
			<header>
				<p>
					<?php
						include("../../bb.php");
						mysql_maj_visites();
					?>
				</p>

				<div id="entete">
					<div class="photo_entete">
						<img src="/images/robinet_eau_144x144.png">
					</div>
					<div class="element_entete">
						<div id="titre_et_liens_entete">
							<div id="titre_entete">
								<h1>Consommations d'eau de Maxime</h1>
							</div>
						</div>
					</div>
				</div>
			</header>
<!--
			<h2 id="graphe_eau" class="eau">Graphe de consommation d'eau</h2>
			<p class="retour_top"><a href="#top">retour en haut de la page</a></p>
-->
			<section>
				<article>
					<h2 id="facture_eau" class="eau">Factures d'eau</h2>
					<br />

					<fieldset class="facture">
					<legend>Factures déjà payées</legend> <!-- Titre du fieldset --> 
						<ul>
							<li><a href="20171130_facture_eau.pdf" title="30/11/2017">facture du 30/11/2017</a> &emsp; &emsp; &emsp; &emsp; (90,25 €)</li>
							<li><a href="20170520_facture_eau.pdf" title="20/05/2017">facture du 20/05/2017</a> &emsp; &emsp; &emsp; &emsp; (113,45 €)</li>
							<li><a href="20161111_facture_eau.pdf" title="11/11/2016">facture du 11/11/2016</a> &emsp; &emsp; &emsp; &emsp; (184,39 €)</li>
							<li><a href="20160601_facture_eau.pdf" title="01/06/2016">facture du 01/06/2016</a> &emsp; &emsp; &emsp; &emsp; (55,08 €)</li>
						</ul>
					</fieldset>
				</article>
			</section>

<!--			<p class="retour_top"><a href="#top">retour en haut de la page</a></p>-->

			<section>
				<article>
					<h2 id="sommes_versees" class="eau">Total des sommes versées</h2>
					<br />

					<table>
					   <caption></caption>

					   <thead> <!-- En-tête du tableau -->
						   <tr>
							   <th>Somme</th>
							   <th>versée le</th>
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
							   <td>100 €</td>
							   <td>23/12/2017</td>
							   <td>30/11/2017</td>
							   <td>91,80 €</td>
						   </tr>
						   <tr>
							   <td>115 €</td>
							   <td>29/06/2017</td>
							   <td>20/05/2017</td>
							   <td>129,06 €</td>
						   </tr>
						   <tr>
							   <td>200 €</td>
							   <td>28/12/2016</td>
							   <td>11/11/2016</td>
							   <td>189,31 €</td>
						   </tr>
						   <tr>
							   <td>60 €</td>
							   <td>20/06/2016</td>
							   <td>01/06/2016</td>
							   <td>60,08 €</td>
						   </tr>
						   <tr>
							   <td>5 €</td>
							   <td>16/01/2016</td>
							   <td>05/12/2015</td>
							   <td></td>
						   </tr>
						   <tr>
							   <td><strong>480 €</strong></td>
							   <td colspan="2"><strong><center>TOTAL</center></strong></td>
							   <td><strong>470,25 €</strong></td>
						   </tr>
					   </tbody>
					</table>
				</article>
			</section>

<!--			<p class="retour_top"><a href="#top">retour en haut de la page</a></p>-->
		</div>
	</BODY>
</HTML>
