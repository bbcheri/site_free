<!DOCTYPE html>
<HTML>
	<HEAD>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../style.css" />
		<TITLE>Marie</TITLE>
	</HEAD>

	<BODY>
		<p>
			<?php
				include("../../bb.php");
				mysql_maj_visites();
			?>
		</p>

		<CENTER><H1>Consommations d'eau de Marie</H1></CENTER>
		<br />
<!--		<p>
			Aller directement au :<br />
			<ul>
				<li><a href="#graphe_eau">graphe de consommation d'eau</a></li>
				<li><a href="#facture_eau">téléchargement des factures d'eau</a></li>
			</ul>
		</p>
-->
<!--		<hr> <!-- ligne de séparation -->
<!--
		<h2 id="consommation_eau">Consommations d'eau</h2>

		<h3 id="graphe_eau" class="eau">Graphe de consommation d'eau</h3>
		<p class="retour_top"><a href="#top">retour en haut de la page</a></p>
-->
		<h3 id="facture_eau" class="eau">Factures d'eau</h3>
		<ul class="facture">
			<li><a href="20180105_facture_eau.pdf" title="5/01/2018">facture du 5/01/2018</a></li>
			<li><a href="20171012_facture_eau.pdf" title="12/10/2017">facture du 12/10/2017</a></li>
			<li><a href="20170314_facture_eau.pdf" title="14/03/2017">facture du 14/03/2017</a></li>
			<li><a href="20161102_facture_eau.pdf" title="2/11/2016">facture du 2/11/2016</a></li>
			<li><a href="20160627_facture_eau.pdf" title="27/06/2016">facture du 27/06/2016</a></li>
			<li><a href="20160302_facture_eau.pdf" title="2/03/2016">facture du 2/03/2016</a></li>
			<li><a href="20151204_facture_eau.pdf" title="4/12/2015">facture du 4/12/2015</a></li>
		</ul>
		<p class="retour_top"><a href="#top">retour en haut de la page</a></p>
	</BODY>
</HTML>