<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Espace membre PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Connexion</h2>
	</div>
	
	<form method="post" action="connexion.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Pseudo</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Mot de passe</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Connexion</button>
		</div>
		<p>
			Pas encore un membre? <a href="inscription.php">S'inscrire</a>
		</p>
	</form>


</body>
</html>