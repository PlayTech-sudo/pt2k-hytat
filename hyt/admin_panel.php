<?php
	session_start();
	// ob_start(ob_gzhandler);
	$title = "Administration";
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
		  	<div class="col-lg-2 col-md-2">
		    	<ul class="nav nav-pills nav-pills-rose nav-pills-icons flex-column" role="tablist">
		      		<li class="nav-item">
		        		<a class="nav-link active show" data-toggle="tab" href="#usr1" role="tablist">
		          			<i class="material-icons">local_grocery_store</i> Sales
		        		</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" data-toggle="tab" href="#usr2" role="tablist">
		          			<i class="material-icons">add_box</i> purchase
		        		</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" data-toggle="tab" href="#usr3" role="tablist">
		          			<i class="material-icons">insert_chart</i> Expense
		        		</a>
		      		</li>
		    	</ul>
		  	</div>
		<div class="col-md-10">
		    	<div class="tab-content">
		      		<div class="tab-pane active show" id="usr1">
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
								        				foreach ($res as $parts) {
								        			?>
									          		<tr>
											            <td class="text-center"><?php echo $parts['part_id']; ?></td>
											            <td><?php echo $parts['part_name']; ?></td>
											            <td><?php echo $parts['part_type']; ?></td>
											             <td><?php echo $parts['prod_id']; ?></td>
											            <td><?php echo $parts['part_amt']; ?></td>
											            
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
											            <th class="text-center">ID</th>
											            <th>Name</th>
											            <th>Type</th>
											            <th>Proj_Id</th>
											            <th>Amount</th>
											            
											     
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
		      				</div>
		      				
		      			</div>
		    		</div>
		    		 <div class="tab-pane" id="usr2">
		    			<div class="row">
		      				<div class="col-md-11 col-sm-12">
		      					<div class="card">
								  	<div class="card-header card-header-rose card-header-icon">
								    	<div class="card-icon">
								      		<i class="material-icons">assignment</i>
								    	</div>
								    	<h4 class="card-title">Purchase Details</h4>
								  	</div>
								  	<div class="card-body">
								    	<div class="table-responsive">
								      		<table class="table">
								        		<thead>
								          			<tr>
											            <th class="text-center">Purchase ID</th>
											            <th>Invoice ID</th>
											            <th>Purchase Date</th>
											            <th class="text-left">Actions</th>
								          			</tr>
								        		</thead>
								        		<tbody>
								        			<?php
								        				$res = getData($conn, "purchase_invoice");
								        				foreach ($res as $user) {
								        			?>
									          		<tr>
											            <td class="text-center"><?php echo $user['purc_id']; ?></td>
											            <td><?php echo $user['purc_amt']; ?></td>
											        
											            <td class="text-center td-actions">
												            <a rel="tooltip" href="edit_user.php?edituser=<?php echo $user['id']; ?>" class="btn btn-success btn-link" title="view">
												              <i class="material-icons">visibility</i>
												            </a>
												            <a rel="tooltip" href="process/admin/usr_process.php?deluser=<?php echo $user['id']; ?>" class="btn btn-danger btn-link" title="edit">
												              <i class="material-icons">edit</i>
												            </a>
												             <a rel="tooltip" href="process/admin/usr_process.php?deluser=<?php echo $user['id']; ?>" class="btn btn-danger btn-link" title="Delete">
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


			      	 <div class="tab-pane" id="usr3">
		    			<div class="row">
		      				<div class="col-md-4 col-sm-12">
						        <div class="card">
						          	<div class="card-header card-header-rose card-header-icon">
						              	<div class="card-icon">
						                	<i class="material-icons">add</i>
						              	</div>
						              	<h4 class="card-title">Add Expense</h4>
						          	</div>
						          	<div class="card-body">
						            	<form name="form5" action="" method="POST">
						              		<div class="form-group bmd-form-group">
						                      	<label class="bmd-label-floating">Expense ID</label>
						                      	<input type="text" class="form-control" id="p_id" name="eid" required="" autofocus="">
						                  	</div>
						                  	<div class="form-group bmd-form-group">
						                      	<label class="bmd-label-floating">Expense Name</label>
						                      	<input type="text" class="form-control" id="p_name" required="" name="ecat">
						                  	</div>

						                  	<div class="form-group bmd-form-group">
						                      	<label class="bmd-label-floating"> Expense Category</label>
						                     	<input type="text" class="form-control" id="p_type" required="" name="eamt">
						                  	</div>

						                  	<div class="form-group bmd-form-group">
						                      	<label class="bmd-label-floating"> Expense Amount</label>
						                     	<input type="text" class="form-control" id="p_type" required="" name="sub">
						                  	</div>
						                  	<div class="form-group bmd-form-group">
						                      	<label class="bmd-label-floating"> Notes</label>
						                     	<textarea rows="07" cols="38" name="notes" > </textarea> 
						                     
						                  	</div>


						                  	
						                  	<div class="row">
						                    	<div class="col-md-12">
						                      		<button class="btn btn-success" name="addprod" type="submit">Add</button>
						                      		<?php

if (isset($_POST['addprod'])) {

	$sql = "INSERT INTO expense (exp_id, exp_categ, exp_amt, sujcet, notes) VALUES ('".$_POST["eid"]."','".$_POST["ecat"]."','".$_POST["eamt"]."','".$_POST["sub"]."','".$_POST["notes"]."')";
	if (mysqli_query($conn, $sql)) 
	{
		 echo "<script type='text/javascript'>showNotification('top','right','Record Added Successfully.', 'info');</script>";

		//header('location:addproject.php');
			} 
			else 
			{
			    echo "<script type='text/javascript'>showNotification('top','right','Duplicate Entry.','info');</script>";
			}

	}
						                      		?>
						                      		<button class="btn btn-danger" type="reset">Clear</button>
						                    	</div>
						                  	</div>
						           		</form>
					</div>
					</div>	           		
						      
						          	</div>
						          	<div class="col-md-8 col-sm-12">
		      					<div class="card">
								  	<div class="card-header card-header-rose card-header-icon">
								    	<div class="card-icon">
								      		<i class="material-icons">view_list</i>
								    	</div>
								    	<h4 class="card-title">Expense Details</h4>
								  	</div>
								  	<div class="card-body">
								    	<div class="table-responsive">
								      		<table class="table">
								        		<thead>
								          			<tr>
											            <th class="text-center"> Expense ID</th>
											            <th> Expense Category</th>
											            <th> Expense Amount</th>
											            <th>  Subject</th>
											           	<th> Notes</th>
											     	<th colspan="2" align="center"> Action </th>
								          			</tr> 
								        		</thead>
								        		<tbody>
								        			<?php
								        				$res = getData($conn, "expense");
								        				foreach ($res as $role) {
								        			?>
									          		<tr>
											            <td class="text-center"><?php echo $role['exp_id']; ?></td>
											            <td><?php echo $role['exp_categ']; ?></td>
											            <td><?php echo $role['exp_amt']; ?></td>
											             <td><?php echo $role['subject']; ?></td>
											             <td><?php echo $role['notes']; ?></td>
											           
											            <td class="text-center td-actions">
												            <a rel="tooltip" href="edit_expense.php?editexp=<?php echo $role['exp_id']; ?>" class="btn btn-success btn-link" title="Edit">
												              <i class="material-icons">edit</i>
												            </a>
												        </td>

											            <td>
												            <a rel="tooltip" href="?delrole=<?php echo $role['id']; ?>" class="btn btn-danger btn-link" title="Delete">
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
		      				
		      			</div>
			      	</div>


		  		</div>
			</div>
</div>
</div>
</div>
<!-- MAIN CONTENT ENDS -->

<?php
	require_once "./template/footer.php";
	ob_end_flush();
?>
