<?php session_start(); ?>
<?php ob_start(); ?>
<div class="center">
	<form method="post" action="../../index.php?action=Create">
		    <label class="formCreate admin" >Titre de l'article</label>
			<input type="text" class="postTitle" name="postTitle" placeholder="Titre de l'article"></input>
			<label class="formCreate admin">Nouvel Article</label>
			<textarea name="newPost"></textarea>
			<input type="submit" class="Create btn btn--primary" name="Create" value="Enregistrer"></input>
	</form>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>