<?php ob_start(); ?>
    <div class="row narrow section-intro has-bottom-sep">
        <div class="col-full"> 
            <h3>Mon super blog !</h3>
            <h1>Derniers billets du blog :</h1>
        </div>
    </div>
        <div class="centers">
            <div class="blog-list block-1-2 block-tab-full">
                <?php
                while ($data = $posts->fetch())
                {
                ?>
                    <article class="col-block">                             
                        <div class="blog-date">
                            <a href="index.php?action=post&amp;id=<?= $data['id'] ?>"><?= $data['creation_date_fr'] ?></a>
                        </div>                       
                        <h1 class="h01"><a href="index.php?action=post&amp;id=<?= $data['id'] ?>"><?= htmlspecialchars($data['title']) ?></a></h1>
                        <p class="lead">
                        <?= nl2br(htmlspecialchars($data['content'])) ?>
                        </p>
                        <div class="blog-cat">
                                <a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a>
                        </div>                       
                    </article>
                <?php
                }
                $posts->closeCursor();
                ?>
           </div>
        </div>        
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>