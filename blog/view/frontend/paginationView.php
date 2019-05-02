<?php ob_start(); ?>
    <div class="row narrow section-intro has-bottom-sep">
        <div class="col-full"> 
            <h3>Mon super blog !</h3>
            <h1>Tous les billets du blog :</h1>
        </div>
    </div>
        <div class="centers">
            <div class="blog-list block-1-2 block-tab-full">
            <?php
            $messagesParPage=5;
            $nombreDePages=ceil(intval($nbPosts)/$messagesParPage);
            if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
            {
                 $pageActuelle=intval($_GET['page']);
             
                 if($pageActuelle>$nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
                 {
                      $pageActuelle=$nombreDePages;
                 }
            }
            else // Sinon
            {
                 $pageActuelle=1; // La page actuelle est la n°1    
            }          
            $premiereEntree=($pageActuelle-1)*$messagesParPage; // On calcul la première entrée à lire           
                // Parcours du tableau posts
                $results = $req->fetchAll();
                foreach ($results as $data)
                {
               ?>
               <article class="col-block">                             
                    <div class="blog-date">
                        <a href="post-<?= $data['id'] ?>"><?= $data['creation_date_fr'] ?></a>
                    </div>                       
                    <h2 class="h01">
                        <a href="post-<?= $data['id'] ?>"><?= $data['title'] ?></a>
                    </h2>
                    <p class="lead">
                    <?= $data['content'] ?>
                    </p>
                    <div class="blog-cat">
                        <a href="post-<?= $data['id'] ?>">
                        <!-- Condition permettant d'afficher le nombre de commentaires -->
                        <?= $data['nbCom']?> <?php echo ($data['nbCom'] > 1) ? 'Commentaires' : 'Commentaire'; ?></a>
                    </div>                       
                    </article> 
    <?php
    }
    // Fin du parcours du tableau
    $req->closeCursor();     
             
        echo '<div class=bottom">Page : '; //Pour l'affichage, on centre la liste des pages
        for($i=1; $i<=$nombreDePages; $i++) //On fait notre boucle
        {
             //On va faire notre condition
             if($i==$pageActuelle) //Si il s'agit de la page actuelle...
             {
                 echo ' [ '.$i.' ] '; 
             }  
             else //Sinon...
             {
                  echo ' <a href="allPosts-'.$i.'">'.$i.'</a> ';
             }
        }
        echo '</div>';
        ?>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>