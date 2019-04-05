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
                // Parcours du tableau posts
                $results = $posts->fetchAll();
                foreach ($results as $data)
                {
                ?>
                    <article class="col-block">                             
                        <div class="blog-date">
                            <a href="index.php?action=post&amp;id=<?= $data['id'] ?>"><?= $data['creation_date_fr'] ?></a>
                        </div>                       
                        <h1 class="h01"><a href="index.php?action=post&amp;id=<?= $data['id'] ?>"><?= $data['title'] ?></a></h1>
                        <p class="lead">
                        <?= $data['content'] ?>
                        </p>
                        <div class="blog-cat">
                                <a href="index.php?action=post&amp;id=<?= $data['id'] ?>">
                                    <!-- Condition permettant d'afficher le nombre de commentaires -->
                                    <?= $data['nbCom']?> <?php echo ($data['nbCom'] > 1) ? 'Commentaires' : 'Commentaire'; ?></a>
                        </div>                       
                    </article>
                <?php
                }
                // Fin du parcours du tableau
                $posts->closeCursor();
                ?>
                <a href="index.php?action=pagination">Tout les articles....</a>
           </div>
        </div>        
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
 