<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p>Derniers billets du blog :</p>

<div class="row blog-content">
            <div class="col-full">

                <div class="blog-list block-1-2 block-tab-full">
<?php

while ($data = $posts->fetch())
{
?>
                    <article class="col-block">
                                
                        <div class="blog-date">
                            <a href="blog-single.html"><?= $data['creation_date_fr'] ?></a>
                        </div>  
                        
                        <h2 class="h01"><a href="blog-single.html"><?= htmlspecialchars($data['title']) ?></a></h2>
                        <p>
                        <?= nl2br(htmlspecialchars($data['content'])) ?>
                        </p>

                        <div class="blog-cat">
                                <a href="indexx.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a>
                        </div>                       
                    </article>
<?php
}
$posts->closeCursor();
?>
               </div>
            </div>        
    </div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>