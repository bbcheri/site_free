<?php

/*
** Function		: compteur_bb
** Input		: aucun pour l'instant
** Output		: aucun
** Description	: affichage d'un formulaire de login de membre
** Creator		: Bernie, mais en vrai, j'ai trouvé ce code sur https://openclassrooms.com/forum/sujet/compteur-de-visite-total-en-html-33665
** Date			: 7/03/2018
*/ 
function compteur_openclassroom()
{
	// Connexion à MySQL
	mysql_connect("bernard.berenguier.sql.free.fr", "root", "password");
	mysql_select_db("nom_Base");
	 
	// ETAPE 1 : on vérifie si l'IP se trouve déjà dans la table
	// Pour faire ça, on n'a qu'à compter le nombre d'entrées dont le champ "ip" est l'adresse ip du visiteur
	$ret_sql = mysql_query('SELECT COUNT(*) AS inb_enreg FROM connectes WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
	$data = mysql_fetch_array($ret_sql);
	  
	if ($data['inb_enreg'] == 0) // L'ip ne se trouve pas dans la table, on va l'ajouter
	{
		mysql_query('INSERT INTO connectes VALUES(\'' . $_SERVER['REMOTE_ADDR'] . '\', ' . time() . ')');
	}
	else // L'ip se trouve déjà dans la table, on met juste à jour le timestamp
	{
		mysql_query('UPDATE connectes SET timestamp=' . time() . ' WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
	}

	$timestamp_5min = time() - (60 * 5); // 60 * 5 = nombre de secondes écoulées en 5 minutes
	$ret_sql = mysql_query('SELECT COUNT(*) AS inb_enreg FROM connectes WHERE timestamp>\'' . $timestamp_5min . '\'');
	$data = mysql_fetch_array($ret_sql);
	  
	if ($data['inb_enreg'] == 1)// respect du singulier
	{
		echo '<strong>' . $data['inb_enreg'] . '</strong> visiteur connecté<br />';
	}
	else
	{
		echo '<strong>' . $data['inb_enreg'] . '</strong> visiteurs connectés<br />';
	}
	  
	$jour = date('d');
	$mois = date('m');
	$annee = date('Y');
	$aujourd_hui = mktime(0, 0, 0, $mois, $jour, $annee);
	$ret_sql = mysql_query('SELECT COUNT(*) AS inb_enreg FROM connectes WHERE timestamp>\'' . $aujourd_hui . '\'');
	$data = mysql_fetch_array($ret_sql);
	  
	if ($data['inb_enreg'] == 1)// respect du singulier
	{
		echo '<strong>' . $data['inb_enreg'] . '</strong> visiteur aujourd\'hui<br />';
	}
	else
	{
		echo '<strong>' . $data['inb_enreg'] . '</strong> visiteurs aujourd\'hui<br />';
	} 
	  
	$ret_sql = mysql_query('SELECT COUNT(*) AS inb_enreg FROM connectes');
	$data = mysql_fetch_array($ret_sql);
	  
	echo '<strong>' . $data['inb_enreg'] . '</strong> visites au total<br />';
	/* Ce qui devrait donner un résultat du type :
	1 visiteur connecté
	10 visiteurs aujourd'hui
	27 visites au total*/
}

function affiche_server()
{
	echo 'time(): ' . time() . ', ';
	echo 'REMOTE_ADDR: ' . $_SERVER['REMOTE_ADDR'] . ', ' . '<br />'; // 139.124.x.x
	echo 'SERVER_SOFTWARE: ' . $_SERVER['SERVER_SOFTWARE'] . ', ' . '<br />'; // Apache/ProXad [Jul 22 2015 14:50:14]
//	echo 'QUERY_STRING: '  . $_SERVER['QUERY_STRING'] . ', ' . '<br />';				//*****   vide   *****
	echo 'DOCUMENT_ROOT: ' . $_SERVER['DOCUMENT_ROOT'] . ', ' . '<br />'; // /mnt/107/sdb/9/1/bernard.berenguier
//	echo 'HTTP_REFERER: ' . $_SERVER['HTTP_REFERER'] . ', ' . '<br />';					//*****   vide   *****
	echo 'HTTP_USER_AGENT: ' . $_SERVER['HTTP_USER_AGENT'] . ', ' . '<br />'; // Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:52.0) Gecko/20100101 Firefox/52.0
//	echo 'REMOTE_HOST: ' . $_SERVER['REMOTE_HOST'] . ', ' . '<br />';					//*****   vide   *****
	echo 'REMOTE_USER: ' . $_SERVER['REMOTE_USER'] . ', ' . '<br />'; // bernie
//	echo 'REDIRECT_REMOTE_USER: ' . $_SERVER['REDIRECT_REMOTE_USER'] . ', ' . '<br />';	//*****   vide   *****
	echo 'SCRIPT_NAME: ' . $_SERVER['SCRIPT_NAME'] . ', ' . '<br />'; // /consommation/index.php
	echo 'PHP_AUTH_USER: ' . $_SERVER['PHP_AUTH_USER'] . ', ' . '<br />'; // bernie
	echo 'PHP_AUTH_PW: ' . $_SERVER['PHP_AUTH_PW'] . ', ' . '<br />'; // xx
}

/**
 * Récupérer la véritable adresse IP d'un visiteur
 */
function get_ip() {
	// IP si internet partagé
	if (isset($_SERVER['HTTP_CLIENT_IP'])) {
		return $_SERVER['HTTP_CLIENT_IP'];
	}
	// IP derrière un proxy
	elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	// Sinon : IP normale
	else {
		return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
	}
}

/**
 * Ouverture de ma BDD
 */
function open_mysql_bb()
{
	// Connexion à MySQL
	$mabase = mysql_connect("sql.free.fr", "bernard.berenguier", "bboim35") or die("Impossible de se connecter : " . mysql_error());
	mysql_select_db("bernard.berenguier");
	return $mabase;
}

/**
 * Connexion à ma BDD et affichage des visites
 */
function mysql_bb_affich_visites()
{
	$base = open_mysql_bb(); //connexion à la base de donnees
	
	$srequete = 'SELECT * FROM visites';
	// on lance la requete (mysql_query) et on impose un message d'erreur si la requete ne	se passe pas bien (or die)
	$ret_sql = mysql_query($srequete) or die('Erreur SQL !' . $srequete . ' ' . mysql_error());

	echo 'Voici les visites : ' . '<br />';
	while($data = mysql_fetch_array($ret_sql))
	{
//		echo '<br>' . 'print_r' . '<br>' . print_r($data);
		echo 'ip: ' . $data['ip'] . ', pseudo: ' . $data['pseudo'] . ', URL: ' . $data['URL'] . ', date: ' . 
			$data['date'] . ', temps: ' . $data['temps'] . '<br />';
	}
	echo '<br />';
}

/**
*** MAJ de la table des visites
*** Si le triplé [@IP, pseudo, URL] ne se trouve pas dans la table
*** ou s'il est âgé de plus d'1 heure, on l'ajoute
**/
function mysql_maj_visites()
{
	$base = open_mysql_bb(); //connexion à la base de donnees
	
	$sadr_ip = $_SERVER['REMOTE_ADDR'];
	$spseudo = $_SERVER['REMOTE_USER'];
	$spage = $_SERVER['SCRIPT_NAME'];

	$srequete = 'SELECT COUNT(*) AS inb_enreg FROM visites WHERE ip=\'' . $sadr_ip . '\' AND pseudo=\'' . $spseudo . 
				'\' AND URL =\'' . $spage . '\'';
	$ret_sql = mysql_query($srequete);
	$data = mysql_fetch_array($ret_sql);
	  
	if ($data['inb_enreg'] == 0) // le triplé [@IP,pseudo,URL] ne se trouve pas dans la table, on l'ajoute
	{
//		echo 'Le triplé [@IP,pseudo,URL] ne se trouve pas dans la table.' . '<br>';
	
		$srequete = 'INSERT INTO visites(ip, pseudo, URL) VALUES(\'' . $sadr_ip . '\',\'' . $spseudo . '\',\'' . $spage . '\')';
		// on insère les informations du formulaire dans la table
		mysql_query($srequete) or die('Erreur SQL !' . $sql . '<br>' . mysql_error());
	}
	else // l'@IP se trouve déjà dans la table, on l'ajoute à nouveau si son dernier enregistrement est âgé de plus d'1 heure
	{
//		echo 'Le triplé [@IP,pseudo,URL] se trouve bien dans la table !' . '<br>';

		$srequete = 'SELECT * FROM visites WHERE ip=\'' . $sadr_ip . '\' AND pseudo=\'' . $spseudo . '\' AND URL =\'' . $spage . 
					'\' ORDER BY date DESC';
		// on lance la requete (mysql_query) et on impose un message d'erreur si la requete ne	se passe pas bien (or die)
		$ret_sql = mysql_query($srequete) or die('Erreur SQL !' . $srequete . ' ' . mysql_error());
		$data = mysql_fetch_array($ret_sql);

		$now   = time();
		$date_visite = $data['date'];
		$diff = abs(($now - strtotime($date_visite)) / 60); // différence en minute entre maintenant et la date de l'enregistrement
		//		echo date("Y-m-d H:i:s",$now) . ', dv: ' . $date_visite . '<br>';
		
		if($diff > 60) // la dernière visite de cette @IP remonte à plus d'1 heure
		{
//			echo 'la dernière visite de cette @IP remonte à plus d\'1 heure: ' . $diff . '<br>';
			$srequete = 'INSERT INTO visites(ip, pseudo, URL) VALUES(\'' . $sadr_ip . '\',\'' . $spseudo . '\',\'' . $spage . '\')';
			// on insère les informations du formulaire dans la table
			mysql_query($srequete) or die('Erreur SQL !' . $sql . '<br>' . mysql_error());
		}
/*		else
		{
			echo 'la dernière visite de cette @IP remonte à moins d\'1 heure: ' . $diff . '<br>';
			$srequete = 'UPDATE visites SET date =\'' . date("Y-m-d H:i:s",$now) . '\' WHERE ip=\'' . $sadr_ip . '\' AND pseudo=\'' . 
						$spseudo . '\' AND URL =\'' . $spage . '\' AND date =\'' . $date_visite . '\'';
			$ret_sql = mysql_query($srequete) or die('Erreur SQL !' . $srequete . ' ' . mysql_error());
		}
*/	}

	mysql_close ($base);
}

?>
