<?php

// Chargement des classes
require_once('model/RegisterManager.php');

function addAdmin($pseudo, $email, $pass_hashe) 
{
	$registerManager = new \Tp\Blog\Model\RegisterManager();

	$pass_hashe = password_hash($_POST['pass'], PASSWORD_DEFAULT);

	$dataAdmin = $registerManager->addAdmin($pseudo, $email, $pass_hashe);

	require('view/backend/connexionView.php');
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
	        $_SESSION['id'] = $resultat['id'];
	        $_SESSION['pseudo'] = $pseudo;
	        echo 'Vous êtes connecté !';

	        require('view/backend/adminView.php');
	    }
	    else {
	        throw new Exception('Mauvais identifiant ou mot de passe !');
	    }
	}
}