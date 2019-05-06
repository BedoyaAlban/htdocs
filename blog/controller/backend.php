<?php

// Chargement des classes
require_once('model/RegisterManager.php');
// Redirection vers la page pour créer un admin
function addAdminView() 
{
	require('view/backend/registerView.php');
}
// Ajout d'un admin (hachage du MDP, vérification de la dispo du pseudo et de la conformité de l'email)
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
// Connexion de l'admin si MDP correct et pseudo existe en BDD
function connectAdmin($pseudo)
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

	        header("Location: homeAdminView");
	    }
	    else {
	        throw new Exception('Mauvais identifiant ou mot de passe !'); 
	    }
	}
}
// Redirection vers la page de connexion
function connexionView()
{
	require('view/backend/connexionView.php');
}
// Page d'accueil de l'admin
function adminView()
{
	$registerManager = new \TP\Blog\Model\RegisterManager();
	$posts = $registerManager->getPostsAdmin();
	require 'view/backend/adminView.php';
}
// Déconnexion de l'admin, vide la ligne id du tableau session + détruit la session.
function deconnexion()
{
	session_start();

	unset($_SESSION['id']);

	session_destroy();

	header('Location: connexion');
}
// Redirection vers la page pour créer un article
function viewCreate()
{
	require 'view/backend/addPostView.php';
}
// Ajout d'un nouvel article
function newPostAdmin($title, $content)
{
	$registerManager = new \Tp\Blog\Model\RegisterManager();

	$newPost = $registerManager->addNewPost($title, $content);

	header('Location: adminView');
}
// Redirection vers la page pour modifier un article 
function postAdmin()
{
    $registerManager = new \Tp\Blog\Model\RegisterManager();

    $post = $registerManager->getPostAdmin($_GET['id']);

    require('view/backend/editPostView.php');
}
// Suppression d'un article
function deletePostAdmin()
{
	$registerManager = new \Tp\Blog\Model\RegisterManager();

	$req = $registerManager->deletePost($_GET['id']);

	header('Location: adminView');
}
// Ajout de l'article modifié
function postEditAdmin($id, $title, $content)
{
	$registerManager = new \Tp\Blog\Model\RegisterManager();

	$postEdit = $registerManager->editPost($title, $content, $id);

	header('Location: Edit-'.$id);

}
// Affichage d'un article
function postAdminView() 
{
	$registerManager = new \Tp\Blog\Model\RegisterManager();

    $post = $registerManager->getPostAdmin($_GET['id']);

    require('view/backend/postAdminView.php');
}
// Redirection vers la page pour modérer les commentaires
function commentsAdminView()
{
	$registerManager = new \Tp\Blog\Model\RegisterManager();

	$comments = $registerManager->getCommentsAdmin();

	require('view/backend/commentsAdminView.php');
}
// Actualisation de page avec le commentaire valider
function adminValidateComment()
{
	$registerManager = new \Tp\Blog\Model\RegisterManager();

	$comValid = $registerManager->validComment($_GET['id']);

	header('Location: viewCommentsAdmin');
}
// Suppression du commentaire indésirable
function adminDeleteComment()
{
	$registerManager = new \Tp\Blog\Model\RegisterManager();

	$comDelete = $registerManager->deleteComment($_GET['id']);

	header('Location: viewCommentsAdmin');
}























