<?php
	session_start();
	// ob_start(ob_gzhandler);
	$title = "Inventory Management";
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
								      		<i class="material-icons">view_list</i> 
								    	</div>
								    	
								    	<h4 class="card-title">Product Lists</h4>
								  	</div>
								  	
								  	<div class="card-body">
								    	<div class="table-responsive">
								      		<table class="table">
								        		<thead>
								          			<tr>
											        
											            <th class="text-center">Product id</th>
											            <th>Product name</th>
											           
											            <th>Product amount</th>
											            <th>Product status</th>
											          

											       
											     
								          			</tr>
								        		</thead>
								        		<tbody>




								        			<?php
								        				$res = getData($conn, "product");
								        				foreach ($res as $role) {
								        					if (isset($role['prod_id'])) {
								        					?>
								        							<tr><td class="text-center"><?php echo $role['prod_id']; ?></td>
											            <td><?php echo $role['prod_name']; ?></td>

											             <td><?php echo $role['prod_amt']; ?></td>

											             <td><?php echo "(active)" ; ?></td>
											                    		     										        			          													        									   									               
										          	 <td>
												   
									          		</tr>
								        						
								        				<?php
								        					} 
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
								      		<i class="material-icons">view_list</i> 
								    	</div>
								    	
								    	<h4 class="card-title">Parts Lists</h4>
								  	</div>
								  	
								  	<div class="card-body">
								    	<div class="table-responsive">
								      		<table class="table">
								        		<thead>
								          			<tr>
											           
								                        <th class="text-center" >Parts id</th>
											            <th>Parts name</th>
											            <th>Parts amount</th>
											            <th>Parts status </th>
											            
											         
											     
								          			</tr>
								        		</thead>
								        		<tbody>

								        			<?php
								        				$res = getData($conn, "parts");
								        				foreach ($res as $role) {
								        					if (isset($role['part_id'])) {
								        					?>
								        							<tr><td class="text-center"><?php echo $role['part_id']; ?></td>
											            <td><?php echo $role['part_name']; ?></td>

											             <td><?php echo $role['part_amt']; ?></td>

											             <td><?php echo "(active)" ; ?></td>
											                    		     										        			          													        									   									               
										          	 <td>
												   
									          		</tr>
								        						
								        				<?php
								        					} 

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

	
