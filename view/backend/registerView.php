<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

	<div class="header">
			<h2>Créer un nouvel Admin</h2>
	</div>
	
	<form method="post" action="backend.php">

		<div class="input-group">
			<label>Pseudo</label>
			<input type="text" name="pseudo" >
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" >
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

	</form>

<?php $content = ob_get_clean(); ?>

<?php require('../frontend/template.php'); ?>