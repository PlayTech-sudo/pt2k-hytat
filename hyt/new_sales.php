<?php
	session_start();
	// ob_start(ob_gzhandler);
	$title = "User Management";
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
		  	
		  	
		      				<div class="col-md-6 col-sm-12">
						        <div class="card">
						          	<div class="card-header card-header-rose card-header-icon">
						              	<div class="card-icon">
						                	<i class="material-icons">list</i>
						              	</div>
						              	<h4 class="card-title">Parts List</h4>


						          	</div>
						          	<div class="card-body">
						            	<div class="table-responsive">
								      		<table class="table">
								        		<thead>
								          			<tr>
											            <th class="text-center">Part_ID</th>
											            <th>Part Name</th>
											            <th>Part Type</th>
											            <th>Product Id</th>
											            <th>Part Amt</th>

											            
											     
								          			</tr>
								        		</thead>
								        		<tbody>
								        			<?php
								        				$res = getData($conn, "parts");
								        				foreach ($res as $role) {
								        			?>
									          		<tr>
											            <td class="text-center"><?php echo $role['part_id']; ?></td>
											            <td><?php echo $role['part_name']; ?></td>
											            <td><?php echo $role['part_type']; ?></td>
											             <td><?php echo $role['prod_id']; ?></td>
											            <td><?php echo $role['part_amt']; ?></td>
											            
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
						    
		      				<div class="col-md-6 col-sm-12">
		      					<div class="card">
								  	<div class="card-header card-header-rose card-header-icon">
								    	<div class="card-icon">
								      		<i class="material-icons">list</i>
								    	</div>
								    	<h4 class="card-title">Product list</h4>
								  	</div>
								  	<div class="card-body">
								    	<div class="table-responsive">
								      		<table class="table">
								        		<thead>
								          			<tr>
											            <th class="text-center">Product_ID</th>
											            <th>Product Name</th>
											            <th>Product Type</th>
											            <th>Project Id</th>
											            <th>Product Amt</th>
											            
											     
								          			</tr>
								        		</thead>
								        		<tbody>
								        			<?php
								        				$res = getData($conn, "product");
								        				foreach ($res as $product) {
								        			?>
									          		<tr>
											            <td class="text-center"><?php echo $product['prod_id']; ?></td>
											            <td><?php echo $product['prod_name']; ?></td>
											            <td><?php echo $product['prod_type']; ?></td>
											             <td><?php echo $product['proj_id']; ?></td>
											            <td><?php echo $product['prod_amt']; ?></td>
											            
									          		</tr>
									          		<?php
									          			}
									          		?>
								        		</tbody>
								      		</table>
								    	</div>
								  	</div>
								</div>
		      				</div>          <div class="row">
		      				                	<div class="col-md-12">
		      				                		<button class="btn btn-success" name="addRole"  onclick = "window.location.href = 'e.php';">Generate Invoice</button>
						                      		<button class="btn btn-danger" onclick = "window.location.href = 'admin_dashboard.php';">Back</button>
						                    		
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