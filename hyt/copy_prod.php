
<?php
	session_start();	
	// ob_start(ob_gzhandler);
	$title = "Copy Product";
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
              <h4 class="card-title">Copy Product</h4>
          	</div>
					  <div class="card-body">
				    	<?php
				    		if(isset($_GET['delrole'])) {
				    			$idd= $_GET['delrole'];
				    		$sql = "SELECT prod_id, prod_name, prod_type, proj_id, prod_amt FROM product where prod_id='$idd' ";
   								$res = mysqli_query($conn, $sql);
								$row = mysqli_fetch_array($res);
							?>
						            
							<form name="form4" action="" method="POST">
		        		<div class="form-group bmd-form-group">
						                      	<label class="bmd-label-floating">Prod ID</label>
						                      	<input type="text" class="form-control" id="p_id" name="pid" required=""  value="" autofocus="">
						                  	</div>
						                  	<div class="form-group bmd-form-group">
						                      	<label class="bmd-label-floating">Prod Name</label>
						                      	<input type="text" class="form-control" id="p_name" required="" value="<?php echo $row['prod_name']; ?>"  name="pname">
						                  	</div>
						                  	<div class="form-group bmd-form-group">
						                      	<label class="bmd-label-floating"> Prod Type</label>
						                     	<input type="text" class="form-control" id="p_type" required="" 
						                     	value="<?php echo $row['prod_type']; ?>"  name="ptype">
						                  	</div>
						                  
						                  	<div class="form-group bmd-form-group">
						                     	<label >Proj ID</label>
						                     	<input type="text" class="form-control" id="p_sd" required="" value="<?php echo $row['proj_id']; ?>"  name="projid">
						                  	</div>
						               
						                  	<div class="form-group bmd-form-group">
						                     	<label >Prod Amount</label>
						                     	<input type="text" class="form-control" id="p_sd" required="" value="<?php echo $row['prod_amt']; ?>"  name="prodamt">
						                  	</div>
	            	<div class="row">
	              	<div class="col-md-12">
						          <button class="btn btn-success" name="save" type="submit">Add</button>
						          <?php
						          if (isset($_POST['save'])) {
	$sql = "INSERT INTO product (prod_id, prod_name, prod_type, proj_id, prod_amt) VALUES ('".$_POST['pid']."', '".$_POST['pname']."', '".$_POST['ptype']."','".$_POST['projid']."' ,'".$_POST['prodamt']."')";
	if (mysqli_query($conn, $sql)) {
		$message = "Record Added Successfully";
		echo "<script type='text/javascript'>alert('$message');</script>";

			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	}
	?>
	
	<button class="btn btn-danger" type="button" onclick="window.location.href='add_prod.php';">Back</button>

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
