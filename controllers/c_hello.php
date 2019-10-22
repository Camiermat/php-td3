<?php

// Contrôle - Neutralisation du paramètre reçu 
if (isset($_GET['nom']))
{
  $nom =  htmlspecialchars($_GET['nom']);

<<<<<<< HEAD
  //Appel du modèle
  require_once('UtilisateurDAO.php');
  
  $user = (new UtilisateurDAO())->getUser($nom);
  
  // affichage des erreurs de login
  if(isset($erreur)) 
  {
	 //Retour à la page d'accueil pour afficher les erreurs
     header('Location: index.php?message='.$erreur.'&nom='.$nom);
  }
  else
  {
	// affichage de la vue si il n'y a pas d'erreur
    require_once(PATH_VIEWS.$page.'.php');     
  }
}
else
{
	// retour à la page d'accueil si il n'y pas de paramètre
     header('Location: index.php');
}
?>
