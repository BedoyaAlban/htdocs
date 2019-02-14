<?php ob_start(); ?>
<section id="blog" class="s-blog target-section">
	<div class="container">
		<div class="row">
			<h2 class="text-center">Articles du Blog</h2>
		</div>
	    
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
								foreach ($posts as $id => $title) {
									echo '<td> .$id. .$title. </td>';
								}
                                 ?>
								<td>Tiger Nixon</td>
								<td>System Architect</td>
								<td>Edinburgh</td>
	                            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
	    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
							</tr>
							
	                          $posts->closecursor
						</tbody>
					</table>

		
		</div>
		</div>
	</div>

</section>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>