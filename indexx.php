<?php
require('controller/frontend.php');
require('controller/backend.php');
try {
    if (isset($_POST['register_btn']))
    {
        if (empty($_POST['pseudo'])) {
            throw new Exception("Nom d'utilisateur est nécessaire");
        }
        if (empty($_POST['email'])) {
            throw new Exception("Email est nécessaire");
        }
        if (empty($_POST['password_1'])) {
            throw new Exception("Le mot de passe est nécessaire");
        }
        if ($_POST['password_1'] != $_POST['password_2']) {
            throw new Exception("les deux mots de passe ne correspondent pas")
        }
        else {
            $password_hashe = password_hash($_POST['password_1'], PASSWORD_DEFAULT);

            registerAdmin($_POST['pseudo'], $password_hashe);
        }
    }
    if (isset($_POST['login_btn'])) {
        if (empty($_POST['pseudo'])){
            throw new Exception("Nom d'utilisateur est nécessaire");
            elseif (empty($_POST['password'])){
                throw new Exception("Mot de passe requis");
            }
        }
        else {
            $password_hashe = password_hash($_POST['password'], PASSWORD_DEFAULT);

            login();
        }
    }
}
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
