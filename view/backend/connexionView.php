<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<div class="header">
		<h2>Connexion</h2>
	</div>
	
	<form method="post" action="backend.php">

		<div class="input-group">
			<label>Pseudo</label>
			<input type="text" name="pseudo" >
		</div>
		<div class="input-group">
			<label>Mot de passe</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Connexion</button>
		</div>
	</form>

<?php $content = ob_get_clean(); ?>
<?php require('../frontend/template.php'); ?>