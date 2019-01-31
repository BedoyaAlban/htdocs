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
}