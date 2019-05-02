<?php session_start(); ?>
<?php ob_start(); ?>
<div class="center">
<div class="row narrow section-intro has-bottom-sep">
        <div class="col-full admin">
            <h1 class="admin">Commentaires du Blog</h1>
    </div>
    <div class="row blog-content">
        <div class="col-full">
            <div class="blog-list block-1-2 block-tab-full">
                <div class="row">
                    <div class="col-md-12">   
                        <table id="datatable" class="table table-striped table-bordered admin" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="admin">Auteur</th>
                                    <th class="admin">Date</th>
                                    <th class="admin">Contenu</th>
                                    <th class="admin">Valider</th>
                                    <th class="admin">Supprimer</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <th class="admin">Auteur</th>
                                    <th class="admin">Date</th>
                                    <th class="admin">Contenu</th>
                                    <th class="admin">Valider</th>
                                    <th class="admin">Supprimer</th>
                                </tr>
                            </tfoot>

                            <tbody>
                                <?php
                                // Boucle parcourant le tableau comments
                                    $data = ($comments->fetchAll());
                                    foreach ($data as $value) {
                                        // Conversion string en nombre
                                       $commentSignale = intval($value['signaler']);
                                       $commentValidate = intval($value['valider']);
                                       ?>
                                <!-- Condition tenaire pour différencier un commentaire signalé -->
                                <tr <?php echo (($commentSignale == 1) ? 'style="background-color: rgba(134, 33, 33, 0.6)"': " ") ?>>
                                    <td> <?= htmlspecialchars($value['author'])?></td>
                                    <td> <?= $value['comment_date_fr']?></td>
                                    <td> <?= substr(htmlspecialchars($value['comment']), 0, 40)?></td>
                                    <td>
                                        <!-- Condition ternaire pour un commentaire déjà modéré -->
                                        <p <?php echo (($commentValidate == 0) ? 'style="display: none"': " ") ?> class="buttons" data-placement="top" data-toggle="tooltip" title="ValidateCom">
                                            <a href="/blog/ValidateCom-<?= $value['id'] ?>">
                                                <button class="btn btn-icon btn-xs edit" data-title="ValidateCom" data-toggle="modal" data-target="#ValidateCom" >
                                                    <i class="im im-check-mark-circle" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="buttons" data-placement="top" data-toggle="tooltip" title="DeleteCom">
                                            <a href="/blog/DeleteCom-<?= $value['id'] ?>">
                                                <button class="btn btn-icon btn-xs delete" data-title="DeleteCom" data-toggle="modal" data-target="#DeleteCom">
                                                    <i class="im im-x-mark-circle" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                        </p>
                                    </td>
                                <?php
                                     }
                                     // Arrêt du parcours du tableau
                                     $comments->closeCursor();
                                     ?>  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>