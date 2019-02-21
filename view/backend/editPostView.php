<?php ob_start(); ?>
<section id="blog" class="s-blog target-section">
	<form method="post" action="../../indexx.php?action=Modify&amp;id=<? $post['id'] ?>">
		<input type="text" name="editPostTitle" placeholder="<?= $post['title'] ?>"></input>
		<textarea name="editPost"><?= $post['content'] ?></textarea>
        <input type="submit" class="btn btn--primary" value="Modifier"></input>
	</form>
</section>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>