<?php ob_start(); ?>
<section id="blog" class="s-blog target-section">
	<form method="post" action="../../indexx.php?action=Create">
			<input type="text" name="postTitle" placeholder="Titre de l'article"></input>
			<textarea name="newPost"></textarea>
			<input type="submit" name="Create" class="btn btn--primary" value="Enregistrer"></input>
	</form>
</section>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>