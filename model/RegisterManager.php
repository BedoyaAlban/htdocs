<?php

namespace Tp\Blog\Model;

require_once("model/Manager.php");

class RegisterManager extends Manager
{
	public function addAdmin($pseudo, $pass)
	{
		$db = $this->dbConnect();
		$inscription = $db->prepare("INSERT INTO membres (pseudo, email, pass, date_inscription) VALUES('$pseudo', '$email', '$password', now()");
		$dataAdmin = $inscription->execute(array($pseudo, $pass);
			
		return $dataAdmin;
	}

	public function getAdmin($id)
	{
		$db = $this->dbconnect();
		$req = $db->prepare('SELECT pseudo, pass FROM membres WHERE id = ?');
		$req->execute(array($id));
        $gadmin = $req->fetch();

        return $gadmin;
	}
}