<?php

namespace Tp\Blog\Model;

require_once("model/Manager.php");

class CommentManager extends Manager
{
    // Récupere les commentaires avec l'id du post
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, signaler, valider FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));


        return $comments;
    }
    // Post un commentaire avec l'id du post, l'auteur et le commentaire (vient du formulaire)
    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }
    // Signaler un commentaire via l'id 
    public function signalerComment($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE comments SET signaler = 1 WHERE id = :id');
        $comSignale = $req->execute(array('id' => $id));

        return $comSignale;
    }
}