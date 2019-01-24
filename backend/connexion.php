<?php include('functions.php') ?>
<?php $title = 'Espace admin PHP and MySQL'; ?>
<?php ob_start(); ?>

	<div class="header">
		<h2>Connexion</h2>
	</div>
	
	<form method="post" action="connexion.php">

		<?php echo display_error(); ?>

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
		<p>
			Pas encore un membre? <a href="inscription.php">S'inscrire</a>
		</p>
	</form>

<?php $content = ob_get_clean(); ?>
<?php require('../view/frontend/template.php'); ?>