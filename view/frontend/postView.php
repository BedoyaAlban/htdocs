
<?php ob_start(); ?>
<div class="row narrow section-intro has-bottom-sep">
    <div class="col-full">
        <h3>Mon super blog !</h3>
        <h1><a href="index.php?action=listPosts">Retour à la liste des billets</a></h1>
    </div>
</div>
<article class="center">
    <h1 class="h01"><?= $post['title'] ?></h1>
    <div class="blog-date">
        <a href=""><?= $data['creation_date_fr'] ?></a>
    </div>
    <p>
        <?= $post['content'] ?>
    </p>
</article>
<div class="row narrow section-intro has-bottom-sep">
    <div class="col-full">
    <h1>Commentaires</h1>
        <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
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
        // Parcours du tableau comments
        $data = ($comments->fetchAll());
        foreach ($data as $value)
        {
            $commentSignale = intval($value['signaler']);
            $commentValidate = intval($value['valider']);
        ?>
            <p>
                <strong>
                    <?= htmlspecialchars($value['author']) ?>
                </strong> le <?= $value['comment_date_fr'] ?>
                <!-- Condition qui permet de signaler qu'une fois un commentaire -->
                (<a href="index.php?action=Signaler&amp;id=<?= $value['id'] ?>&amp;postid=<?= $post['id'] ?>" <?php echo (($commentValidate == 0) ? 'style="display: none"': " ") ?>> Signaler </a>)
            </p>
            <!-- Condition ternaire qui indique que le commentaire est en cours de modération -->
            <p <?php echo (($commentSignale == 0) ?  'style="display:none"': " ") ?>>Votre commentaire a été signalé!</p>
            <!-- Condition ternaire qui permet d'afficher le commentaire après modération -->
            <p <?php echo (($commentSignale == 1) ?  'style="display:none"': " ") ?>>
                 <?= nl2br(htmlspecialchars($value['comment'])) ?>
            </p>
        <?php
        $comments->closeCursor();
        }
        ?>
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
