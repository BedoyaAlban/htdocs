<?php ob_start(); ?>
<div class="row narrow section-intro has-bottom-sep">
    <div class="col-full">
		<h1>Mon super blog !</h1>
		<h1><a href="indexx.php">Retour à la liste des billets</a></h1>
    </div>
</div>
<h1>Commentaire</h1>
<div class="com">
    <h3>
        <p>Auteur : <em><?= htmlspecialchars($com['author']) ?></em></p><br />
    </h3>
    <form action="indexx.php?action=addEditComment&amp;id=<?= $com['id'] ?>&amp;postid=<?= $_GET['postid'] ?>" method="post">
    	<div>
	        <label for="author">Auteur</label><br />
	        <input type="text" id="author" name="author" value="<?= htmlspecialchars($com['author']) ?>" />
	    </div>
	    <div>
	        <label for="comment">Commentaire</label><br />
	        <textarea id="comment" name="comment"><?= nl2br(htmlspecialchars($com['comment'])) ?></textarea>
	    </div>
	    <div>
	        <input type="submit" />
	    </div>
    </form>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>