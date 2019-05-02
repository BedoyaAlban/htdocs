<?php session_start(); ?>
<?php ob_start(); ?>
<div class="photo-container">
    <img src="/blog/public/assets/img/ryan.jpg" alt="">
</div>
<h3 class="title admin">Vous êtes connecté : <?= $_SESSION['pseudo'] ?></h3> 
<p class="category admin">Writer&Blogger</p>
    <div class="center">
        <a href="/blog/CreatePostView" class="btn btn--primary">Créer un Article </a>
        <a href="/blog/addAdminView" class="btn btn--primary">Créer un Admin</a> 
    </div> 
    <div class="row narrow section-intro has-bottom-sep">
        <div class="col-full admin">
            <h1 class="admin">Articles du Blog</h1>
    </div>
    <div class="row blog-content">
        <div class="col-full">
            <div class="blog-list block-1-2 block-tab-full">
                <div class="row">
                    <div class="col-md-12">   
                        <table id="datatable" class="table table-striped table-bordered admin" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="admin">Titre</th>
                                    <th class="admin">Date</th>
                                    <th class="admin">Editer</th>
                                    <th class="admin">Supprimer</th>
                                    <th class="admin">Afficher</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <th class="admin">Titre</th>
                                    <th class="admin">Date</th>
                                    <th class="admin">Editer</th>
                                    <th class="admin">Supprimer</th>
                                    <th class="admin">Afficher</th>
                                </tr>
                            </tfoot>

                            <tbody>
                                <?php
                                    $data = ($posts->fetchAll());
                                    foreach ($data as $value) {
                                       ?>
                                <tr>
                                    <td> <?= $value['title']?></td>
                                    <td> <?= $value['creation_date_fr']?></td>
                                    <td>
                                        <p class="buttons" data-placement="top" data-toggle="tooltip" title="Edit">
                                            <a href="/blog/Edit-<?= $value['id'] ?>">
                                                <button class="btn btn-icon btn-xs edit" data-title="Edit" data-toggle="modal" data-target="#edit" >
                                                    <i class="im im-edit" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="buttons" data-placement="top" data-toggle="tooltip" title="Delete">
                                            <a href="/blog/Delete-<?= $value['id'] ?>">
                                                <button class="btn btn-icon btn-xs delete" data-title="Delete" data-toggle="modal" data-target="#delete" >
                                                    <i class="im im-x-mark-circle" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="buttons" data-placement="top" data-toggle="tooltip" title="View">
                                            <a href="/blog/postAdminView-<?= $value['id'] ?>">
                                                <button  class="btn btn-icon btn-xs view" data-title="View" data-toggle="modal" data-target="#view" >
                                                    <i class="im im-eye" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                        </p>
                                    </td>
                                </tr>
                                <?php
                                     }
                                     $posts->closeCursor();
                                     ?>  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>        
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>