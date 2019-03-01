<?php
	// API web pour un senseur
	// Accepte une valeur booléenne 0 ou 1

	if (isset($_GET["boolSet"]))
	{
		$v_param = $_GET["boolSet"];
		$fp = fopen("boolset.txt", "w");

		if ($fp !== false)
		{
			// Pour plus de sécurité, on s'assure que ce qui est passé en paramètre
			// est bien valide (une valeur possible) avant d'écrire dans le fichier.
			if ($v_param == "0")
				fputs($fp, "0");
			else if ($v_param == "1")
				fputs($fp, "1");

			fclose($fp);
		}
	}

	// Afficher la valeur contenue dans le fichier au chargement de la page
	if (file_exists("boolset.txt") && is_file("boolset.txt"))
		readfile("boolset.txt");
?>
