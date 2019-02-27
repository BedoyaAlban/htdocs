<?php
session_start();

require('controller/frontend.php');
require('controller/backend.php');

try {
    if (isset($_GET['action'])) {
    
        switch ($_GET['action']) {
            case 'listPosts':
                listPosts();
                break;
            case 'post':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    post();
                }
                else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
                break;
            case 'updateComment':
                comment();
                break;
            case 'addEditComment':
                addCommentEdit($_GET['id'], $_POST['author'], $_POST['comment']);
                break;
            case 'addComment':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                        addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                    }
                    else {
                        throw new Exception('Tous les champs ne sont pas remplis !');
                    }
                }
                else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
                break;
            case 'registerAdmin':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {
                    addAdmin($_POST['pseudo'], $_POST['email'], $_POST['password_1'], $_POST['password_2']);
                }
                break;
            case 'addAdminView':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {
                    addAdminView();
                }
                break;
            case 'adminView': 
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {
                    adminView();   
                }
                break;
            case 'Edit':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        postAdmin();
                    }
                }
                break;
            case 'login':
                getAdmin($_POST['pseudo']);
                break;
            case 'connexion':
                connexionView();
                break;
            case 'deconnexion':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {
                    deconnexion();
                }
                break;
            case 'postAdminView':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {
                    postAdminView();
                }
                break;
            case 'viewCommentsAdmin':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {
                    commentsAdminView();
                }
                break;
            case 'View':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {
                    viewCreate();
                }
                break;
            case 'Create':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) { 
                    newPostAdmin($_POST['postTitle'], $_POST['newPost']);
                }
                break;
            case 'Modify':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {    
                    postEditAdmin($_GET['id'], $_POST['editPostTitle'], $_POST['editPost']);
                }
                break;
            case 'Delete':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        deletePostAdmin();
                    }
                }
                break;    
            default:
               listPosts();
                break;
        }
    }
    else {
        listPosts();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
