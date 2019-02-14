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
                                <th>Id</th>
                                <th>Title</th>
                                <th>Date</th>
                                    <th>Edit</th>
                                     <th>Delete</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Date</th>
                                 <th>Edit</th>
                                     <th>Delete</th>
                            </tr>
                        </tfoot>

                        <tbody>
                            <tr>
                                <?php
                                $data = ($posts->fetchAll());
                                foreach ($data as $key => $value) {
                                   ?> <td> <?= $data['id'] . $data["title"]?> </td>;
                                 <?php
                                 }
                                 $posts->closeCursor();
                                 ?>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                            </tr>
                            
                                
                        </tbody>
                    </table>

        
        </div>
        </div>
    </div>
                <!--<?php

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
                ?> -->
           </div>
        </div>        
    </div>
</section>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>