<?php

namespace Tp\Blog\Model;

require_once("model/Manager.php");

class RegisterManager extends Manager
{
	public function addAdmin($pseudo, $email, $pass_hashe)
	{
        $db = $this->dbConnect();     
		$inscription = $db->prepare('INSERT INTO membres (pseudo, email, pass, date_inscription) VALUES(:pseudo, :email, :pass, now())');
		$dataAdmin = $inscription->execute(array('pseudo' => $pseudo, 'email' => $email , 'pass' => $pass_hashe));
	}

    public function getAdmin($pseudo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, pass FROM membres WHERE pseudo = :pseudo');   
        $req->execute(array('pseudo' => $pseudo));
        $result = $req->fetch();

        return $result;
    }

    public function getPostsAdmin()
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date LIMIT 0, 10');
        $req->execute();

        return $req;
    }

    public function getCommentsAdmin()
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments ORDER BY comment_date DESC');
        $comments->execute();

        return $comments;
    }

    public function verifyPseudo($pseudo) 
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT pseudo FROM membres WHERE pseudo = :pseudo');
        $req->execute(array('pseudo' => $pseudo));
        $found = $req->fetch();

        return $found;
    }

    public function getPostAdmin($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    public function addNewPost($title, $content)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO posts (title, content, creation_date) VALUES(?, ?, now())');
        $newPost = $req->execute(array($title, $content));
    }

    public function deletePost($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM posts WHERE id = :id');
        $del = $req->execute(array('id' => $id));

        return $del;

    }

    public function editPost($title, $content, $id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE posts SET title = ?, content = ? WHERE id = ?');
        $postEdit = $req->execute(array($title, $content, $id));

    }
}