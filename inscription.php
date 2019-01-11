<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Espace membre PHP and MySQL</title>
</head>
<body>
	<div class="header">
		<h2>Inscription</h2>
	</div>
	
	<form method="post" action="inscription.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Pseudo</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Mot de passe</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirmer votre mot de passe</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn">Inscription</button>
		</div>
		<p>
			Déjà membre? <a href="connexion.php">Se connecter</a>
		</p>
	</form>
</body>
</html>