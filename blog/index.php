<?php
session_start();

require('controller/frontend.php');
require('controller/backend.php');
// Routeur
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
                    post();
                }
                break;
            case 'addComment':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                        addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                    }
                    else {
                        post();
                    }
                }
                else {
                    post();
                }
                break;
            case 'allPosts':
                if (isset($_GET['page'])){
                  allPosts($_GET['page']);  
                } else {
                    allPosts(1);/* attribut pour aller sur la première page s'il n'y a pas plusieurs pages */
                }
                break;
            case 'Signaler':
                commentSignale($_GET['id']);
                break;
            case 'registerAdmin':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {
                    addAdmin($_POST['pseudo'], $_POST['email'], $_POST['password_1'], $_POST['password_2']);
                } else {
                    connexionView();
                }
                break;
            case 'addAdminView':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {
                    addAdminView();
                } else {
                    connexionView();
                }
                break;
            case 'adminView': 
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {
                    adminView();   
                } else {
                    connexionView();
                }
                break;
            case 'Edit':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        postAdmin();
                    }
                } else {
                    connexionView();
                }
                break;
            case 'login':
                connectAdmin($_POST['pseudo']);
                break;
            case 'connexion':
                connexionView();
                break;
            case 'homeAdminView':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)){
                    adminView();
                } else {
                    connexionView();
                }
                
                break;
            case 'deconnexion':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {
                    deconnexion();
                } else {
                    connexionView();
                }
                break;
            case 'postAdminView':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {
                    postAdminView();
                } else {
                    connexionView();
                }
                break;
            case 'viewCommentsAdmin':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {
                    commentsAdminView();
                } else {
                    connexionView();
                }
                break;
            case 'CreatePostView':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {
                    viewCreate();
                } else {
                    connexionView();
                }
                break;
            case 'Create':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) { 
                    newPostAdmin($_POST['postTitle'], $_POST['newPost']);
                } else {
                    connexionView();
                }
                break;
            case 'Modify':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {    
                    postEditAdmin($_GET['id'], $_POST['editPostTitle'], $_POST['editPost']);
                } else {
                    connexionView();
                }
                break;
            case 'Delete':
                if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        deletePostAdmin();
                    }
                } else {
                    connexionView();
                }
                break;
            case 'DeleteCom':
                    adminDeleteComment($_GET['id']);
            case 'ValidateCom':
                    adminValidateComment();
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
