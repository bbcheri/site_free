<!DOCTYPE html>
<HTML>
	<HEAD>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<TITLE>BB Free</TITLE>
	</HEAD>

	<BODY>
		<div id="bloc_page">
			<header>
				<p>
					<?php
						include("bb.php");
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
								<h1>Bienvenue</h1>
							</div>
							<div id="liens_entete">
								<nav>
									<ul>
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
				<p>
					Aller directement :<br />
					<a href="#debut">au début</a><br />
					<a href="#liens_html">aux liens de sites HTML</a><br />
				</p>
			</section>

			<hr> <!-- ligne de séparation -->

			<section>
				<article>
					<h1>Sète, le 8/04/2017</h1>
					<p><a href="/images/IMG_20170408_195539.jpg"><img src="/images/img_20170408_195539_p.jpg" class="imageflottante" alt="une bande de potes" title="Clique pour agrandir" /></a></p>
					<p class="dessous"><br />il faisait beau...</p>
				</article>

				<aside>
					<form method="post" action="traitement.php">
						<p>
							<fieldset>
								<legend>Infos de connexion</legend> <!-- Titre du fieldset --> 
								<label for="pseudo">Votre pseudo :</label>
								<input type="text" name="pseudo" id="pseudo" />
								<br />
								<label for="pass">Votre mot de passe :</label>
								<input type="password" name="pass" id="pass" />
								<input type="submit" value="Envoyer" />
							</fieldset>
							<br />
							<fieldset>
								<legend>Infos de chapeau</legend> <!-- Titre du fieldset --> 
								<input type="checkbox" name="avec_moyenne" id="avec_moyenne" /> <label for="avec_moyenne">affichage de la moyenne</label><br />
								<label for="chapeaute">Qui est le plus chapeauté ?</label><br />
								<select name="chapeaute" id="chapeaute">
									<option value="Arno">Arno</option>
									<option value="Ber">Ber</option>
									<option value="Chri">Chri</option>
									<option value="Yo">Yo</option>
								</select>
							</fieldset>
						</p>
					</form>
				</aside>
			</section>

			<section>
				<article>
					<h2 id="debut">Le début</h2>
					<p>
						Je te renvoie vers <a href="autre/index.html" title="vas-y, clique...">ailleurs.</a>
					</p>
					<p class="retour_top"><a href="#top">retour en haut de la page</a></p>

					<h2 id="liens_html">Sites WEB</h2>
					<p>
						Site pour redimensionner les images : <a href=http://resizeimage.net/>http://resizeimage.net/</a>
					</p>
					<p class="retour_top"><a href="#top">retour en haut de la page</a></p>
				</article>
			</section>

			<footer>
				<h1>Merci de votre venue...</h1>
			</footer>
		</div>
	</BODY>
</HTML>
