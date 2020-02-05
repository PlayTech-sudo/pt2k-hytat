<?php
	session_start();
	// ob_start(ob_gzhandler);
	$title = "Add Product";
	$acc_code = "A02";
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
		  	
		  	
		      				<div class="col-md-4">
						        <div class="card">
						          	<div class="card-header card-header-rose card-header-icon">
						              	<div class="card-icon">
						                	<i class="material-icons">add</i>
						              	</div>
						              	<h4 class="card-title">Add Customer</h4>
						          	</div>
						          	<div class="card-body">
						            	<form name="form4" action="" method="POST">
						              		<div class="form-group bmd-form-group">
						                      	<label class="bmd-label-floating">Customer ID</label>
						                      	<input type="text" class="form-control" id="p_id" name="p_id" required="" autofocus="">
						                  	</div>
						                  	<div class="form-group bmd-form-group">
						                      	<label class="bmd-label-floating">Customer type</label>
						                      	<input type="text" class="form-control" id="p_type" required="" name="p_type">
						                  	</div>
						                  	<div class="form-group bmd-form-group">
						                      	<label class="bmd-label-floating"> Customer Name</label>
						                     	<input type="text" class="form-control" id="p_name" required="" name="p_name">
						                  	</div>
						                  	<div class="form-group bmd-form-group">
						                      	<label class="bmd-label-floating">Customer Address</label>
						                      	<input type="text" class="form-control" id="pj_id" name="pj_id" required="" autofocus="">
						                  	</div>
						                  	<div class="form-group bmd-form-group">
						                      	<label class="bmd-label-floating">Customer Phno</label>
						                      	<input type="text" class="form-control" id="p_amt" name="p_amt" required="" autofocus="">
						                  	</div>
						                  	
						                  	<div class="row">
						                    	<div class="col-md-12">
						                      		<div class="col-md-12">
						                      		  <button class="btn btn-success" name="addcustomer" type="submit">Add</button>
						                      		    <?php

                                                       if (isset($_POST['addcustomer'])) {
	                                                  $sql = "INSERT INTO custven (cv_id, cv_type, cv_name, cv_address, cv_phno) VALUES ('".$_POST["p_id"]."','".$_POST["p_type"]."','".$_POST["p_name"]."','".$_POST["pj_id"]."','".$_POST["p_amt"]."')";
	                                                 if (mysqli_query($conn, $sql)) {
		                                                  echo "<script type='text/javascript'>showNotification('top','right','Record Added Successfully.','info');</script>";

		                                               	} else {
		 	                                                  echo "<script type='text/javascript'>showNotification('top','right','Duplicate Entry.','info');</script>";
	                                                      	}

	                                                         } ?>
						                      		  <button class="btn btn-danger" type="reset">Clear</button>
						                    	</div>
						                  	</div>
						           		</form>
						           	</div>
						          	</div>
						        </div>
						    </div>
						    
		      				<div class="col-md-8 ">
		      					<div class="card">
								  	<div class="card-header card-header-rose card-header-icon">
								    	<div class="card-icon">
								      		<i class="material-icons">view_list</i>
								    	</div>
								    	<h4 class="card-title">customer list</h4>
								  	</div>
								  	<div class="card-body">
								    	<div class="table-responsive">
								      		<table class="table">
								        		<thead>
								          			<tr>
											            <th class="text-center">customer_ID</th>
											            <th>Customer Type</th>
											            <th>Customer Name</th>
											            <th>Customer address</th>
											            <th>Customer phno</th>
											            <th></th>
											            <th colspan="2" align="center">             Action </th>
											     
								          			</tr>
								        		</thead>
								        		<tbody>
								        			<?php
								        				$res = getData($conn, "custven");
								        				foreach ($res as $role) {
								        			?>
									          		<tr>
											            <td class="text-center"><?php echo $role['cv_id']; ?></td>
											            <td><?php echo $role['cv_type']; ?></td>
											            <td><?php echo $role['cv_name']; ?></td>
											             <td><?php echo $role['cv_address']; ?></td>
											            <td><?php echo $role['cv_phno']; ?></td>
											             <td class="text-center td-actions">
												            <a rel="tooltip" href="edit_customer.php?editcustomers=<?php echo $role['cv_id']; ?>" class="btn btn-success btn-link" title="Edit">
												              <i class="material-icons">edit</i>
												            </a>
												        </td><td>
												           
											            </td>
											            <td>
												            <a rel="tooltip" href="del_customer.php?delcustomer=<?php echo $role['cv_id']; ?>" class="btn btn-danger btn-link" title="Delete">
												              <i class="material-icons">delete</i>
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