<!DOCTYPE html>
<HTML>
	<HEAD>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../style.css" />
		<TITLE>Maxime</TITLE>
	</HEAD>

	<BODY>
		<p>
			<?php
				include("../../bb.php");
				mysql_maj_visites();
			?>
		</p>

		<CENTER><H1>Consommations d'eau de Maxime</H1></CENTER>
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

<!--		<h2 id="consommation_eau">Consommations d'eau</h2>

		<h3 id="graphe_eau" class="eau">Graphe de consommation d'eau</h3>
			<p class="retour_top"><a href="#top">retour en haut de la page</a></p>
-->
		<h3 id="facture_eau" class="eau">Factures d'eau</h3>
		<ul class="facture">
			<li><a href="20171130_facture_eau.pdf" title="30/11/2017">facture du 30/11/2017</a></li>
			<li><a href="20170520_facture_eau.pdf" title="20/05/2017">facture du 20/05/2017</a></li>
			<li><a href="20161111_facture_eau.pdf" title="11/11/2016">facture du 11/11/2016</a></li>
			<li><a href="20160601_facture_eau.pdf" title="1/06/2016">facture du 1/06/2016</a></li>
		</ul>
		<p class="retour_top"><a href="#top">retour en haut de la page</a></p>
	</BODY>
</HTML>
