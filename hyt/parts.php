<?php
	session_start();
	// ob_start(ob_gzhandler);
	$title = "Add Project";
	$acc_code = "D01";
	require "./functions/access.php";
	require_once "./template/header.php";
	require_once "./template/sidebar.php";
	require "functions/dbconn.php";
	require "functions/dbfunc.php";
?>
<!-- MAIN CONTENT START -->
<div class="content" style="min-height: calc(100vh - 160px);">
	<div class="container-fluid">
		<div class="row">
		  	<div class="col-lg-2 col-md-2">
		    	<ul class="nav nav-pills nav-pills-rose nav-pills-icons flex-column" role="tablist">
		      		<li class="nav-item">
		        		<a class="nav-link active show" data-toggle="tab" href="#usr1" role="tablist">
		          			<i class="material-icons">add</i> ADD 
		        		</a>
		      		</li>
		      		
		    	</ul>
		  	</div>
		  	
		      				<div class="col-md-5 col-sm-12">
						        <div class="card">
						          	<div class="card-header card-header-rose card-header-icon">
						              	<div class="card-icon">
						                	<i class="material-icons">add</i>
						              	</div>
						              	<h4 class="card-title">Add Parts</h4>
						          	</div>
						          	<div class="card-body">
						            	<form name="form4" action="process/admin/part_process.php" method="POST">
						              		<div class="form-group bmd-form-group">
						                      	<label class="bmd-label-floating">Parts ID</label>
						                      	<input type="text" class="form-control" id="part_id" name="part_id" required="" autofocus="">
						                  	</div>
						                  	<div class="form-group bmd-form-group">
						                      	<label class="bmd-label-floating">Parts Name</label>
						                      	<input type="text" class="form-control" id="part_name" required="" name="part_name">
						                  	</div>
						                  	<div class="form-group bmd-form-group">
						                      	<label class="bmd-label-floating"> Parts Type</label>
						                     	<input type="text" class="form-control" id="part_type" required="" name="part_type">
						                  	</div>
						                  	
						                  	<div class="row">
						                    	<div class="col-md-12">
						                      		<button class="btn btn-success" name="add" type="submit">Add</button>
						                      		<button class="btn btn-danger" type="reset">Clear</button>
						                    	</div>
						                  	</div>
						           		</form>
						          	</div>
						        </div>
						    </div>
						    
		      				<div class="col-md-5 col-sm-12">
		      					<div class="card">
								  	<div class="card-header card-header-rose card-header-icon">
								    	<div class="card-icon">
								      		<i class="material-icons">view_list</i>
								    	</div>
								    	<h4 class="card-title">Part Details</h4>
								  	</div>
								  	<div class="card-body">
								    	<div class="table-responsive">
								      		<table class="table">
								        		<thead>
								          			<tr>
											            <th class="text-center">Part_ID</th>
											            <th> Name</th>
											            <th> Type</th>
											            <th> </th>
											     	<th colspan="2" align="center">             action </th>
								          			</tr> 
								        		</thead>
								        		<tbody>
								        			<?php
								        				$res = getData($conn, "part");
								        				foreach ($res as $part) {
								        			?>
									          		<tr>
											            <td class="text-center"><?php echo $project['part_id']; ?></td>
											            <td><?php echo $project['part_name']; ?></td>
											            <td><?php echo $project['part_type']; ?></td>
											            <td class="text-center td-actions">
												            <a rel="tooltip" href="part.php?editrole=<?php echo $part['part_id']; ?>" class="btn btn-success btn-link" title="Edit">
												              <i class="material-icons">edit</i>
												            </a>
												        </td><td>
												            <a rel="tooltip" href="process/admin/part_process.php?delrole=<?php echo $part['part_id']; ?>" class="btn btn-danger btn-link" title="Copy">
												              <i class="material-icons">file_copy</i>
												            </a>
											            </td>
											            <td>
												            <a rel="tooltip" href="process/admin/part_process.php?delrole=<?php echo $part['part_id']; ?>" class="btn btn-danger btn-link" title="Delete">
												              <i class="material-icons">close</i>
												            </a>
											            </td>
									          		</tr>
									          		<?php
									          			}
									          		?>
								        		</tbody>
								      		</table>
								    	</div>
								  	</div>
								</div>
		      				</div>
		      			</div>
		    		</div>
		    		
	<?php
		/*if($_GET['msg']==1){
			echo "<script type='text/javascript'>showNotification('top','right','Please select atleast one section!', 'warning');</script>";
		}
		if($_GET['msg']==2){
			echo "<script type='text/javascript'>showNotification('top','right','Role Added Successfully', 'success');</script>";
		}
		if($_GET['msg']==3){
			echo "<script type='text/javascript'>showNotification('top','right','Role Deleted Successfully', 'danger');</script>";
		}
		if($_GET['msg']==4){
			echo "<script type='text/javascript'>showNotification('top','right','Role Updated Successfully', 'info');</script>";
		}
		if($_GET['msg']==5){
			echo "<script type='text/javascript'>showNotification('top','right','User Added Successfully', 'success');</script>";
		}
		if($_GET['msg']==6){
			echo "<script type='text/javascript'>showNotification('top','right','User Updated Successfully', 'info');</script>";
		}
		if($_GET['msg']==7){
			echo "<script type='text/javascript'>showNotification('top','right','User Deleted Successfully', 'danger');</script>";
		}
		if($_GET['msg']==8){
			echo "<script type='text/javascript'>showNotification('top','right','Duplicate Username!', 'warning');</script>";
		}
		if($_GET['msg']==9){
			echo "<script type='text/javascript'>showNotification('top','right','Duplicate Role Name!', 'warning');</script>";
		}*/
	?>
</div>
<!-- MAIN CONTENT ENDS -->
<?php
	require_once "./template/footer.php";
	ob_end_flush();
?>