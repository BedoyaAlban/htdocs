<?php ob_start(); ?>
    <div class="row narrow section-intro has-bottom-sep">
        <div class="col-full"> 
            <h3>Mon super blog !</h3>
            <h1>Tout les billets du blog :</h1>
        </div>
    </div>
        <div class="centers">
            <div class="blog-list block-1-2 block-tab-full">
            <?php

            $messagesParPage=5;

            $nombreDePages=ceil($posts/$messagesParPage);
 
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
             
            
             
            while($donnees_messages= $req->fetchAll()) // On lit les entrées une à une grâce à une boucle
            {
                 //Je vais afficher les messages dans des petits tableaux. C'est à vous d'adapter pour votre design...
                 //De plus j'ajoute aussi un nl2br pour prendre en compte les sauts à la ligne dans le message.
                 echo '<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                 <td><strong>Ecrit par : '.stripslashes($donnees_messages['author']).'</strong></td>
                            </tr>
                            <tr>
                                 <td>'.nl2br(stripslashes($donnees_messages['content'])).'</td>
                            </tr>
                        </table><br /><br />';
                //J'ai rajouté des sauts à la ligne pour espacer les messages.   
            }
             
            echo '<p align="center">Page : '; //Pour l'affichage, on centre la liste des pages
            for($i=1; $i<=$nombreDePages; $i++) //On fait notre boucle
            {
                 //On va faire notre condition
                 if($i==$pageActuelle) //Si il s'agit de la page actuelle...
                 {
                     echo ' [ '.$i.' ] '; 
                 }  
                 else //Sinon...
                 {
                      echo ' <a href="index.php?page='.$i.'">'.$i.'</a> ';
                 }
            }
            echo '</p>';
            ?>

<?php require('template.php'); ?>