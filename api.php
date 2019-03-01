<?php
	// API web pour un senseur
	// Accepte une valeur booléenne 0 ou 1

	$STATE_FILE = "boolset.txt";
	$STATE_PARAM = "boolSet";

	if (isset($_GET[$STATE_PARAM]))
	{
		// Pour plus de sécurité, on s'assure que ce qui est passé en paramètre
		// est bien valide (une valeur possible) avant d'écrire dans le fichier.
		if ($_GET[$STATE_PARAM] == "0" || $_GET[$STATE_PARAM] == "1")
		{
			$fp = fopen($STATE_FILE, "w");

			if ($fp !== false)
			{
				fputs($fp, $_GET[$STATE_PARAM]);
				fclose($fp);
			}
		}
	}

	// Afficher la valeur contenue dans le fichier au chargement de la page
	if (file_exists($STATE_FILE) && is_file($STATE_FILE))
		readfile($STATE_FILE);
?>
