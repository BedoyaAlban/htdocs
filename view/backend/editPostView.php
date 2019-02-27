<?php session_start();?>
<?php ob_start(); ?>
	<div class="center">
		<form method="post" action="../../indexx.php?action=Modify&amp;id=<?= $post['id'] ?>">
			<label class="formCreate" >Titre de l'article</label>
			<input type="text" class="postTitle" name="editPostTitle" value="<?= $post['title'] ?>" ></input>
			<label class="formCreate">Article à modifier</label>
			<textarea name="editPost"><?= $post['content'] ?></textarea>
	        <input type="submit" class="Create btn btn--primary"  value="Modifier"></input>
		</form>
	</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>