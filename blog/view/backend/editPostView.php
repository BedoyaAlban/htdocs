<?php session_start();?>
<?php ob_start(); ?>
	<div class="center">
		<form method="post" action="/blog/Modify-<?= $post['id'] ?>">
			<label class="formCreate" >Titre de l'article</label>
			<input type="text" class="postTitle" name="editPostTitle" value="<?= $post['title'] ?>" required="" ></input>
			<label class="formCreate">Article à modifier</label>
			<textarea name="editPost" required=""><?= $post['content'] ?></textarea>
	        <input type="submit" class="Create btn btn--primary"  value="Modifier"></input>
		</form>
	</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>