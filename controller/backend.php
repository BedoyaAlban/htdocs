<?php

// Chargement des classes
require_once('model/RegisterManager.php');

function addAdmin($pseudo, $email, $password_1, $password_2) 
{
	$registerManager = new \Tp\Blog\Model\RegisterManager();
    
    $pseudo = trim($pseudo); 
    
    $found = $registerManager->verifyPseudo($pseudo); /* if (trim($pseudo) != "" ) */
  
    if ($found != 0) {
    	throw new Exception('Pseudo déjà utilisé!');

    }
	if ( $password_1 != $password_2) {
    	throw new Exception('Les deux mots de passe ne correspondent pas!');
    }
	if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email))
    {
        $pass_hashe = password_hash($password_1, PASSWORD_DEFAULT);
    
		$dataAdmin = $registerManager->addAdmin(trim($pseudo), trim($email), trim($pass_hashe));

		require('view/backend/connexionView.php');
    } else
    {
        throw new Exception('L\'adresse ' . $email . ' n\'est pas valide, recommencez !');
	   
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

function newPostAdmin($title, $content)
{
	$registerManager = new \Tp\Blog\Model\RegisterManager();

	$newPost = $registerManager->addNewPost($title, $content);

	header('Location: indexx.php?action=listPosts');
}

function postAdmin()
{
    $registerManager = new \Tp\Blog\Model\RegisterManager();

    $post = $registerManager->getPostAdmin($_GET['id']);

    require('view/backend/editPostView.php');
}

function deletePostAdmin()
{
	$registerManager = new \Tp\Blog\Model\RegisterManager();

	$req = $registerManager->deletePost($_GET['id']);

	header('Location: indexx.php?action=listPosts');
}

function postEditAdmin($id, $title, $content)
{
	$registerManager = new \Tp\Blog\Model\RegisterManager();

	$postEdit = $registerManager->editPost($title, $content, $id);

}