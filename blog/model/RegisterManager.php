<?php

namespace Tp\Blog\Model;

require_once("model/Manager.php");

class RegisterManager extends Manager
{
    // Ajouter un admin en BDD en ajoutant le pseudo l'email et le MDP haché (vient du formulaire sign up)
	public function addAdmin($pseudo, $email, $pass_hashe)
	{
        $db = $this->dbConnect();     
		$inscription = $db->prepare('INSERT INTO membres (pseudo, email, pass, date_inscription) VALUES(:pseudo, :email, :pass, now())');
		$dataAdmin = $inscription->execute(array('pseudo' => $pseudo, 'email' => $email , 'pass' => $pass_hashe));
	}
    // Récupère l'id et le MDP via le pseudo
    public function getAdmin($pseudo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, pass FROM membres WHERE pseudo = :pseudo');   
        $req->execute(array('pseudo' => $pseudo));
        $result = $req->fetch();

        return $result;
    }
    // Récupère les billets pour le côté Back
    public function getPostsAdmin()
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date LIMIT 0, 10');
        $req->execute();

        return $req;
    }
    // Récupère les commentaires côté Back
    public function getCommentsAdmin()
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, signaler, valider FROM comments ORDER BY signaler DESC, comment_date DESC');
        $comments->execute();

        return $comments;
    }
    // Vérif en BDD existance du pseudo via le pseudo du formulaire
    public function verifyPseudo($pseudo) 
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT pseudo FROM membres WHERE pseudo = :pseudo');
        $req->execute(array('pseudo' => $pseudo));
        $found = $req->fetch();

        return $found;
    }
    // Récupère un billet via l'id du post
    public function getPostAdmin($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }
    // Ajout d'un nouvel article en ajoutant titre et contenu (vient du formulaire) 
    public function addNewPost($title, $content)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO posts (title, content, creation_date) VALUES(?, ?, now())');
        $newPost = $req->execute(array($title, $content));
    }
    // Suppression d'un article via l'id
    public function deletePost($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM posts WHERE id = :id');
        $del = $req->execute(array('id' => $id));

        return $del;

    }
    // Valider un commentaire signalé via l'id 
    public function validComment($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE comments SET valider = 0, signaler = 0 WHERE id = :id');
        $comValid = $req->execute(array('id' => $id));

        return $comValid;
    }
    // Suppression d'un commentaire signalé via l'id
    public function deleteComment($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM comments WHERE id = :id');
        $deleteCom = $req->execute(array('id' => $id));

        return $deleteCom;
    }
    // Modification d'un article existant 
    public function editPost($title, $content, $id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE posts SET title = ?, content = ? WHERE id = ?');
        $postEdit = $req->execute(array($title, $content, $id));

    }
}