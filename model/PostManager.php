<?php

namespace Tp\Blog\Model;

require_once("model/Manager.php");

class PostManager extends Manager
{
    // Récupère les articles et compte le nombre de commentaires via une jointure des deux tables
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT COUNT(c.id) AS nbCom, p.id, p.title, p.content, DATE_FORMAT(p.creation_date, \'%d/%m/%Y à %Hh%imin%ss\') 
            AS creation_date_fr 
            FROM comments c 
            RIGHT JOIN posts p ON c.post_id = p.id 
            GROUP BY p.id 
            ORDER BY creation_date DESC 
            LIMIT 0,5');
        $req->execute();

        return $req;
    }
    // Récupère un article via l'id
    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }
    // public function countAllPosts()
    /*{
    $db = $this->dbConnect();
    $req = $db->prepare('SELECT COUNT(*) AS AllPost from posts ORDER BY creation_date');
    $req->execute();
    $posts = $req->fetchAll();
    return $posts;
    }

    / La requête sql pour récupérer les posts de la page actuelle.
    public function getAllPosts
     $db = $this->dbConnect();
    $req = $db->prepare('SELECT * FROM posts ORDER BY id DESC LIMIT '.$premiereEntree.', '.$messagesParPage.'');
    $req->execute();
    
    return $req;

}