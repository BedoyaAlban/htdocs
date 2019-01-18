<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<div class="row narrow section-intro has-bottom-sep">
    <div class="col-full">
        <h3>Mon super blog !</h3>
        <h1><a href="indexx.php">Retour à la liste des billets</a></h1>
    </div>
</div>

<article class="col-block">
    <h2 class="h01"><a href="blog-single.html"><?= htmlspecialchars($post['title']) ?></a></h2>
    <div class="blog-date">
        <a href="blog-single.html"><?= $data['creation_date_fr'] ?></a>
    </div>
    <p>
        <?= nl2br(htmlspecialchars($post['content'])) ?>
    </p>
</article>

<div class="row narrow section-intro has-bottom-sep">
    <div class="col-full">
    <h2>Commentaires</h2>
        <form action="indexx.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
            <div class="col-full">
                <label for="author"><h4 class="h06">Auteur</h4></label><br />
                <input type="text" id="author" name="author" />
            </div>
            <div class="col-full">
                <label for="comment"><h4 class="h06">Commentaire</h4></label><br />
                <textarea id="comment" name="comment"></textarea>
            </div>
            <div class="col-full">
                <input type="submit" />
            </div>
        </form>
    </div>
</div>
<div class="row narrow section-intro has-bottom-sep">
    <div class="col-full">
        <?php
        while ($comment = $comments->fetch())
        {
        ?>
            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?>(<a href="indexx.php?action=updateComment&amp;id=<?= $comment['id'] ?>&amp;postid=<?= $post['id'] ?>"> modifier </a>)</p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
        <?php
        }
        ?>
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
