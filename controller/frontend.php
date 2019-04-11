<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
// Récupère les articles (compte les commentaires) redirige vers la vue des articles
function listPosts()
{
    $postManager = new \Tp\Blog\Model\PostManager();
    $posts = $postManager->getPosts();

    require('view/frontend/listPostsView.php');
}
// Récupère, affiche un article et récupère les commentaires associés à l'article
function post()
{
    $postManager = new \Tp\Blog\Model\PostManager();
    $commentManager = new \Tp\Blog\Model\CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);


    require('view/frontend/postView.php');
}
// Ajout d'un commentaire et redirige sur la même page avec le commentaire ajouté
function addComment($postId, $author, $comment)
{
    $commentManager = new \Tp\Blog\Model\CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        header('Location: index.php?action=post&id=' . $postId);
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}
// Signaler un commentaire 
function commentSignale($id)
{
    $commentManager = new \Tp\Blog\Model\CommentManager();

    $comSignale = $commentManager->signalerComment($id);

    header('Location: index.php?action=post&id=' . $_GET['postid']);
}
// Pagination afficher tout les articles
function allPosts($nbPages)
{
    $postManager = new \Tp\Blog\Model\PostManager();

    $nbPosts = $postManager->countAllPosts();
    $req = $postManager->getAllPosts($nbPages);

    require('view/frontend/paginationView.php');

}