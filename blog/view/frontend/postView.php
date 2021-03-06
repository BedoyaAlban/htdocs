
<?php ob_start(); ?>
<div class="row narrow section-intro has-bottom-sep">
    <div class="col-full">
        <h3>Mon super blog !</h3>
        <h1><a href="listPosts">Retour à la liste des billets</a></h1>
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
        <?php
        // Parcours du tableau comments
        $data = ($comments->fetchAll());
        foreach ($data as $value)
        {
            $commentSignale = intval($value['signaler']);
            $commentValidate = intval($value['valider']);
        ?>
        <div class="commentaire">
            <p>
                <strong>
                    <?= htmlspecialchars($value['author']) ?>
                </strong> le <?= $value['comment_date_fr'] ?>
                <!-- Condition qui permet de signaler qu'une fois un commentaire -->
                <a href="Signaler-<?= $value['id'] ?>-<?= $post['id'] ?>" <?php echo (($commentValidate == 0) ? 'style="display: none"': " ") ?>> (Signaler) </a>
            </p>
            <!-- Condition ternaire qui permet d'afficher le commentaire après modération -->
            <p <?php echo (($commentSignale == 1) ?  'style="display:none"': " ") ?>>
                 <?= nl2br(htmlspecialchars($value['comment'])) ?>
            </p>
            <!-- Condition ternaire qui indique que le commentaire est en cours de modération -->
            <i> <?php echo (($commentSignale == 1) ?  'Votre commentaire a été signalé!': " ") ?></i>
            <hr>
        </div>
        <?php
        $comments->closeCursor();
        }
        ?>
    </div>
</div>
<div class="row narrow section-intro has-bottom-sep">
    <div class="col-full">
        <form action="addComment-<?= $post['id'] ?>" method="post">
            <div class="col-full">
                <label for="author"><h4 class="h06">Auteur</h4></label><br />
                <input pattern="[A-Za-z0-9]+" type="text" id="author" name="author" />
            </div>
            <div class="col-full">
                <label for="comment"><h4 class="h06">Commentaire</h4></label><br />
                <textarea pattern="[A-Za-z0-9]+" id="comment" name="comment"></textarea>
            </div>
            <div class="col-full">
                <input type="submit" />
            </div>
        </form>
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
