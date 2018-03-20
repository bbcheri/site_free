<!DOCTYPE html>
<HTML>
	<HEAD>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
		<TITLE>Consommations</TITLE>
	</HEAD>

	<BODY>
		<section>
			<p>
				<?php
					switch ($_SERVER['PHP_AUTH_USER'])
					{
						case "bernie":
							include('bernie.php');
						break;
						
						case "jonathan":
							include('jonathan.php');
						break;
						
						case "marie":
							include('marie.php');
						break;
						
						case "maxime":
							include('maxime.php');
						break;
						
						default:
							echo "Désolé, je n'ai pas testé votre pseudo !";
					}
				?>
			</p>
		</section>
	</BODY>
</HTML>
