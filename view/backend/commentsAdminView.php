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
                                    <th class="admin">Author</th>
                                    <th class="admin">Date</th>
                                    <th class="admin">Content</th>
                                    <th class="admin">Moderate</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <th class="admin">Author</th>
                                    <th class="admin">Date</th>
                                    <th class="admin">Content</th>
                                    <th class="admin">Moderate</th>
                                </tr>
                            </tfoot>

                            <tbody>
                                <?php
                                    $data = ($comments->fetchAll());
                                    foreach ($data as $value) {
                                       ?>
                                <tr>
                                    <td> <?= $value['author']?></td>
                                    <td> <?= $value['comment_date_fr']?></td>
                                    <td> <?= $value['comment']?></td>
                                    <td>
                                        <p data-placement="top" data-toggle="tooltip" title="Edit">
                                            <a href="index.php?action=Edit&amp;id=<?= $value['id'] ?>">
                                                <button class="btn btn-icon btn-xs edit" data-title="Edit" data-toggle="modal" data-target="#edit" >
                                                    <i class="im im-edit" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                        </p>
                                    </td>
                                <?php
                                     }
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