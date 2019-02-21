<?php ob_start(); ?>
<section id="blog" class="s-blog target-section">
    <div class="center">
        <input type="submit" name="create" class="btn btn--primary" value="Créer un Article"></input>
    </div>
    <div class="center">
        <a href="view/backend/registerView.php" class="btn btn--primary">Créer un Admin</a> 
    <div class="row narrow section-intro has-bottom-sep">
        <div class="col-full">
            <h1>Articles du Blog</h1>
    </div>
    <div class="row blog-content">
        <div class="col-full">
            <div class="blog-list block-1-2 block-tab-full">
                <div class="row">
                    <div class="col-md-12">   
                        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>View</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>View</th>
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
                                        <p data-placement="top" data-toggle="tooltip" title="Edit">
                                            <a href="indexx.php?action=Edit&amp;id=<?= $value['id'] ?>">
                                                <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >
                                                    <i class="im im-edit" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                        </p>
                                    </td>
                                    <td>
                                        <p data-placement="top" data-toggle="tooltip" title="Delete">
                                            <a href="indexx.php?action=Delete&amp;id=<? $value['id'] ?>">
                                                <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
                                                    <i class="im im-x-mark-circle" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                        </p>
                                    </td>
                                    <td>
                                        <p data-placement="top" data-toggle="tooltip" title="View">
                                            <a href="indexx.php?action=post&amp;id=<?= $value['id'] ?>">
                                                <button class="btn btn-danger btn-xs" data-title="View" data-toggle="modal" data-target="#view" >
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
</section>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>