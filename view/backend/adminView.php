<?php ob_start(); ?>
<section id="blog" class="s-blog target-section">
    <div class="center">
        <input type="submit" name="create" class="btn btn--primary" value="Créer un Article"></input>
    </div>
    <div class="row narrow section-intro has-bottom-sep">
        <div class="col-full">
            <h1>Articles du Blog</h1>
    </div>
    <div class="row blog-content">
        <div class="col-full">

            <div class="blog-list block-1-2 block-tab-full">
                <?php

                while ($data = $posts->fetch())
                {
                ?>
                    <article class="col-block">
                                
                        <div class="blog-date">
                            <?= $data['creation_date_fr'] ?>
                        </div>  
                        
                        <h2 class="h01"><?= htmlspecialchars($data['title']) ?></h2>
                        <p class="lead">
                        <?= nl2br(htmlspecialchars($data['content'])) ?>
                        </p>

                        <div class="blog-cat">
                                
                        </div>
                        <div class="col-full">
                            <div class="cols">
                                <input type="submit" name="view" class="btn btn--primary full-width" value="View"></input>
                            </div>
                            <div class="cols">
                                <input type="submit" name="edit" class="btn full-width" value="Edit"></input>
                            </div>
                        </div>                      
                    </article>
                <?php
                }
                $posts->closeCursor();
                ?>
           </div>
        </div>        
    </div>
</section>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>