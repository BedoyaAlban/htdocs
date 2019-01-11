<?php 
	session_start();

	// se connecter à la base de données
	$db = mysqli_connect('127.0.0.1:8889', 'root', 'root', 'test');

	// déclaration de variable
	$username = "";
	$email    = "";
	$errors   = array(); 

	// appelle la fonction register () si on clique sur register_btn
	if (isset($_POST['register_btn'])) {
		register();
	}

	// appelle la fonction login () si on clique sur register_btn
	if (isset($_POST['login_btn'])) {
		login();
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: ../connexion.php");
	}

	// INSCRIPTION UTILISATEUR
	function register(){
		global $db, $errors;

		// recevoir toutes les valeurs d'entrée du formulaire
		$username    =  e($_POST['username']);
		$email       =  e($_POST['email']);
		$password_1  =  e($_POST['password_1']);
		$password_2  =  e($_POST['password_2']);

		// validation du formulaire: s'assurer que le formulaire est rempli correctement
		if (empty($username)) { 
			array_push($errors, "Nom d'utilisateur est nécessaire"); 
		}
		if (empty($email)) { 
			array_push($errors, "Email est nécessaire"); 
		}
		if (empty($password_1)) { 
			array_push($errors, "Le mot de passe est nécessaire"); 
		}
		if ($password_1 != $password_2) {
			array_push($errors, "les deux mots de passe ne correspondent pas");
		}

		// enregistrer l'utilisateur s'il n'y a pas d'erreur dans le formulaire
		if (count($errors) == 0) {
			$password = password_hash($password_1, PASSWORD_DEFAULT);//encrypt the password before saving in the database

			if (isset($_POST['user_type'])) {
				$user_type = e($_POST['user_type']);
				$query = "INSERT INTO users (username, email, user_type, password) 
						  VALUES('$username', '$email', '$user_type', '$password')";
				mysqli_query($db, $query);
				$_SESSION['success']  = "Nouvel utilisateur créé avec succès!!";
				header('location: home.php');
			}else{
				$query = "INSERT INTO users (username, email, user_type, password) 
						  VALUES('$username', '$email', 'user', '$password')";
				mysqli_query($db, $query);

				// récupère l'identifiant de l'utilisateur créé
				$logged_in_user_id = mysqli_insert_id($db);

				$_SESSION['user'] = getUserById($logged_in_user_id); // mettre l'utilisateur connecté en session
				$_SESSION['success']  = "Vous êtes maintenant connecté";
				header('location: indexx.php');				
			}

		}

	}

	// renvoyer un tableau d'utilisateurs à partir de leur identifiant
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM users WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	// CONNEXION UTILISATEUR
	function login(){
		global $db, $username, $errors;

		// grap form values
		$username = e($_POST['username']);
		$password = e($_POST['password']);

		// assurez-vous que le formulaire est rempli correctement
		if (empty($username)) {
			array_push($errors, "Nom d'utilisateur est nécessaire");
		}
		if (empty($password)) {
			array_push($errors, "Mot de passe requis");
		}

		// Tentez de vous connecter si aucune erreur sur le formulaire
		if (count($errors) == 0) {
			$password = password_hash($password, PASSWORD_DEFAULT);

			$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // utilisateur trouvé
				// vérifier si l'utilisateur est admin ou utilisateur
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['user_type'] == 'admin') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "Vous êtes maintenant connecté";
					header('location: admin/home.php');		  
				}else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "Vous êtes maintenant connecté";

					header('location: indexx.php');
				}
			}else {
				array_push($errors, "Mauvaise combinaison nom d'utilisateur / mot de passe");
			}
		}
	}

	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}

	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}

?>