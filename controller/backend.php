<?php

// Chargement des classes
require_once('model/RegisterManager.php');

function addAdmin($pseudo, $email, $pass_hashe) 
{
	$registerManager = new \Tp\Blog\Model\RegisterManager();
    
    $pseudoV = trim($pseudo);
    
    $found = $registerManager->verifyPseudo($pseudo);
  
    if ($found != 0) {
    	throw new Exception('Pseudo déjà utilisé!');

    }
	if ($_POST['password_1'] != $_POST['password_2']) {
    	throw new Exception('Les deux mots de passe ne correspondent pas!');
    }
	if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
    {
        $pass_hashe = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    
		$dataAdmin = $registerManager->addAdmin($pseudo, $email, $pass_hashe);

		require('view/backend/connexionView.php');
    } else
    {
        throw new Exception('L\'adresse ' . $_POST['email'] . ' n\'est pas valide, recommencez !');
	   
	}
}

function getAdmin($pseudo)
{
	$registerManager = new \TP\Blog\Model\RegisterManager();
	$result = $registerManager->getAdmin($pseudo);
	
	$isPasswordCorrect = password_verify($_POST['password'], $result['pass']);
	if (!$result)
	{
	    throw new Exception('Mauvais identifiant ou mot de passe !');
	}
	else
	{
	    if ($isPasswordCorrect) {
	        session_start();
	        $posts = $registerManager->getPostsAdmin();
	        $_SESSION['id'] = $result['id'];
	        var_dump($_SESSION['id']);
	        die();
	        $_SESSION['pseudo'] = $pseudo;
	        echo 'Vous êtes connecté !';

	        require('view/backend/adminView.php');
	    }
	    else {
	        throw new Exception('Mauvais identifiant ou mot de passe !'); 
	         /* ToDo : - message à changer 
	         - changer la vue admin créer un template à la place
	         - si problème fctn addadmin renvoyer à la vue de connexion 
	         - s'inspirer de wordpress pour la fonctionnalité admin  créer les mockups des vues admin avant le reste */
	    }
	}
}