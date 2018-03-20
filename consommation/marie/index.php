<!DOCTYPE html>
<HTML>
	<HEAD>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../style.css" />
		<TITLE>Marie</TITLE>
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
								<h1>Consommations d'eau de Marie</h1>
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
						<legend>Factures à régler</legend> <!-- Titre du fieldset --> 
						<ul>
							<li><a href="20180315_facture_eau.pdf" title="15/03/18">facture du 15/03/2018</a> &emsp; &emsp; &emsp; &emsp; (29,21 €)</li>
						</ul>
					</fieldset>
				</article>
			</section>

			<section>
				<article>
					<fieldset class="facture">
						<legend>Factures déjà payées</legend> <!-- Titre du fieldset --> 
						<ul>
							<li><a href="20180105_facture_eau.pdf" title="5/01/18">facture du 05/01/2018</a> &emsp; &emsp; &emsp; &emsp; (37,02 €)</li>
							<li><a href="20171012_facture_eau.pdf" title="12/10/17">facture du 12/10/2017</a> &emsp; &emsp; &emsp; &emsp; (92,56 €)</li>
							<li><a href="20170314_facture_eau.pdf" title="14/03/17">facture du 14/03/2017</a> &emsp; &emsp; &emsp; &emsp; (58,58 €)</li>
							<li><a href="20161102_facture_eau.pdf" title="2/11/16">facture du 02/11/2016</a> &emsp; &emsp; &emsp; &emsp; (45,22 €)</li>
							<li><a href="20160627_facture_eau.pdf" title="27/06/16">facture du 27/06/2016</a> &emsp; &emsp; &emsp; &emsp; (66,30 €)</li>
							<li><a href="20160302_facture_eau.pdf" title="2/03/16">facture du 02/03/2016</a> &emsp; &emsp; &emsp; &emsp; (80,46 €)</li>
							<li><a href="20151204_facture_eau.pdf" title="4/12/15">facture du 04/12/2015</a> &emsp; &emsp; &emsp; &emsp; (38,06 €)</li>
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
							   <td>37,02 €</td>
							   <td>06/02/2018</td>
							   <td>05/01/2018</td>
							   <td>35,47 €</td>
						   </tr>
						   <tr>
							   <td>91 €</td>
							   <td>23/11/2017</td>
							   <td>12/10/2017</td>
							   <td>95,97 €</td>
						   </tr>
						   <tr>
							   <td>62 €</td>
							   <td>02/05/2017</td>
							   <td>14/03/2017</td>
							   <td>57,36 €</td>
						   </tr>
						   <tr>
							   <td>44 €</td>
							   <td>26/11/2016</td>
							   <td>02/11/2016</td>
							   <td>48,92 €</td>
						   </tr>
						   <tr>
							   <td>70 €</td>
							   <td>27/08/2016</td>
							   <td>27/06/2016</td>
							   <td>66,30 €</td>
						   </tr>
						   <tr>
							   <td>80,46 €</td>
							   <td>mars 2016</td>
							   <td>02/03/2016</td>
							   <td>80,46 €</td>
						   </tr>
						   <tr>
							   <td>38,06 €</td>
							   <td>27/12/2015</td>
							   <td>04/12/2015</td>
							   <td>38,12 €</td>
						   </tr>
						   <tr>
							   <td>0,06 €</td>
							   <td>03/09/2015</td>
							   <td>25/06/2015</td>
							   <td></td>
						   </tr>
						   <tr>
							   <td><strong>422,60 €</strong></td>
							   <td colspan="2"><strong><center>TOTAL</center></strong></td>
							   <td><strong>422,60 €</strong></td>
						   </tr>
					   </tbody>
					</table>
				</article>
			</section>
<!--			<p class="retour_top"><a href="#top">retour en haut de la page</a></p>-->
			</div>
	</BODY>
</HTML>
