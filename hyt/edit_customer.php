<?php
	session_start();	
	// ob_start(ob_gzhandler);
	$title = "Edit Customer";
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
	  	<div class="col-md-12">
	    	<div class="col-md-6 ml-auto mr-auto">
	    		<div class="card">
					  <div class="card-header card-header-rose card-header-icon">
              <div class="card-icon">
                <i class="material-icons">edit</i>
              </div>
              <h4 class="card-title">Edit Customer</h4>
          	</div>
					  <div class="card-body">
				    	<?php
				    		if(isset($_GET['editcustomers'])) {
				    			$idd= $_GET['editcustomers'];
				    		$sql = "SELECT * FROM custven where cv_id='$idd' ";
   								$res = mysqli_query($conn, $sql);
								$row = mysqli_fetch_array($res);
							?>
						            
							<form name="form4" action="" method="POST">
		        		<div class="form-group bmd-form-group">
						                      	<label class="bmd-label-floating">Customer ID</label>
						                      	<input type="text" class="form-control" id="p_id" name="pid" required=""  value="<?php echo $row['cv_id']; ?>" autofocus="">
						                  	</div>
						                  	<div class="form-group bmd-form-group">
						                      	<label class="bmd-label-floating">Customer Type</label>
						                      	<input type="text" class="form-control" id="p_name" required="" value="<?php echo $row['cv_type']; ?>"  name="pname">
						                  	</div>
						                  	<div class="form-group bmd-form-group">
						                      	<label class="bmd-label-floating"> Customer Name</label>
						                     	<input type="text" class="form-control" id="p_type" required="" 
						                     	value="<?php echo $row['cv_name']; ?>"  name="ptype">
						                  	</div>
						                  
						                  	<div class="form-group bmd-form-group">
						                     	<label >Customer Addr</label>
						                     	<input type="text" class="form-control" id="p_sd" required="" value="<?php echo $row['cv_address']; ?>"  name="sdate">
						                  	</div>
						                  	<div class="form-group bmd-form-group">
						                      	<label >Customer phno</label>
						                     	<input type="text" class="form-control" id="p_ed" required="" value="<?php echo $row['cv_phno']; ?>"  name="edate">
						                  	</div>
						                  	
	            	<div class="row">
	              	<div class="col-md-12">
						          <button class="btn btn-success" name="addcustomer" type="submit">Update</button>
						                 


						          <?php

if (isset($_POST['addcustomer'])) {
	$sql = "UPDATE  custven SET cv_id = '".$_POST['pid']."', cv_type = '".$_POST['pname']."', cv_name = '".$_POST['ptype']."', cv_address = '".$_POST['sdate']."',cv_phno = '".$_POST['edate']."'  WHERE cv_id = '".$_POST['pid']."'";
	if (mysqli_query($conn, $sql)) 
	{
		 echo "<script type='text/javascript'>showNotification('top','right','Record Updated Successfully.', 'info');</script>";
			} 
			else 
			{
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

	}
		?>
<button class="btn btn-danger" type="button" onclick = "window.location.href = 'add_customer.php';">Back</button>
						                    	</div>
	            	</div>
	     				</form>
			     		<?php
			     			}
			     		?>
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