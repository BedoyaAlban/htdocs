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
                            <a href="post-<?= $data['id'] ?>"><?= $data['creation_date_fr'] ?></a>
                        </div>                       
                        <h2 class="h01"><a href="post-<?= $data['id'] ?>"><?= $data['title'] ?></a></h2>
                        <div class="lead">
                        <?= $data['content'] ?>
                        </div>
                        <div class="blog-cat">
                                <a href="post-<?= $data['id'] ?>">
                                    <!-- Condition permettant d'afficher le nombre de commentaires -->
                                    <?= $data['nbCom']?> <?php echo ($data['nbCom'] > 1) ? 'Commentaires' : 'Commentaire'; ?></a>
                        </div>                       
                    </article>
                <?php
                }
                // Fin du parcours du tableau
                $posts->closeCursor();
                ?>
                <a href="allPosts">Tous les articles....</a>
           </div>
        </div>        
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
 