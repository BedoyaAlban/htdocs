<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function listPosts()
{
    $postManager = new \Tp\Blog\Model\PostManager();
    $posts = $postManager->getPosts();

    require('view/frontend/listPostsView.php');
}

function post()
{
    $postManager = new \Tp\Blog\Model\PostManager();
    $commentManager = new \Tp\Blog\Model\CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new \Tp\Blog\Model\CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function comment()
{
    $commentManager = new \Tp\Blog\Model\CommentManager();

    $com = $commentManager->getComment($_GET['id']);
    
    require('view/frontend/commentView.php');
}

function addCommentEdit($id, $author, $comment)
{
    $commentManager = new \Tp\Blog\Model\CommentManager();

    $commentEdit = $commentManager->editComment($author, $comment, $id);

    if ($commentEdit == false)
    {
        throw new Exception('Impossible d\'éditer le commentaire !'); 
    }
    else
    {
        header('Location: index.php?action=post&id=' . $_GET['postid']);
    }
}