<?php
// Contrôle - Neutralisation du paramètre reçu 
	// accès base de données
	// connection à la base de données
	try
		{
		$bdd = new PDO('mysql:host='.BD_HOST.'; dbname='.BD_DBNAME.'; charset=utf8', BD_USER, BD_PWD);
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{ 
		if(DEBUG)
			die ('Erreur : '.$e->getMessage());
		$erreur = ERREUR_BDD;
	}
	// s'il n'y a pas d'erreurs : recherche dans la base des photos
	if(!isset($erreur)) 
	{
	$requete = "SELECT * FROM Photos";
	try 
	{
		$query = $bdd->prepare($requete);
		$query->execute();
		if(!$resultats = $query->fetch(PDO::FETCH_ASSOC))
		{
			$erreur = ERREUR_INSCRIPTION;
		}
	}	
	catch(PDOException $e)
	{
				if(DEBUG)
						die ('Erreur : '.$e->getMessage());
		$erreur = ERREUR_BDD;
	}
	}