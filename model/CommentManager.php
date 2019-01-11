<?php

namespace Tp\Blog\Model;

require_once("model/Manager.php");

class CommentManager extends Manager
{
    // Récupere les commentaires
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }
    // Post un commentaire
    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }
    // Récupère le commentaire à modifier
    public function getComment($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, author, comment FROM comments WHERE id = ?');
        $req->execute(array($id));
        $com = $req->fetch();

        return $com;
    }
    // Envoi du commentaire modifié
    public function editComment($author, $comment, $id)
    {
        $db = $this->dbConnect();
        $commentEdt = $db->prepare('UPDATE comments SET author = ?, comment = ? WHERE id = ?');
        $commentEdit = $commentEdt->execute(array($author, $comment, $id));

        return $commentEdit;
    }
}