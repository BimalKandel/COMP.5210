<?php 
include('config.php');
if(isset($_GET['item'])){
    $item = $_GET['item'];
    $resultgetting = mysqli_query($con, "SELECT * from subject WHERE item_no = '$item'") or die($con->error());
    $data  = mysqli_fetch_object($resultgetting);
?>
	<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Update details of Item <?php echo $data->item_no; ?></title>
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

            <link rel="stylesheet" type="text/css" href="css/style.css"/>

            <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer/">

            <!--google fonts-->
            <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
        </head>

        <body>
        	<div class="row">
                <div class="col">
                	<nav class="navbar-expand-md navbar-dark sticky-top">
                        <!--trial for logo -->
                        <div class="container-fluid">

                            <a class="navbar-brand" href="index.php" ><img src="assets/images/logo.jpg"></a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="container">
            	<div class="row">
            		<form class="form-group bg-dark text-light p-5 col-md-8 m-auto" method="post" action="action.php">
            			<a class="btn btn-danger" href="index.php">Back to home</a>
            			<h4>Form to update details</h4>

		            	<input type="hidden" name="id" value="<?php echo $data->id; ?>">
		            	<div class="form-row">
						    <div class="form-group col-md-6">
						    	<label>Item no.</label>
				        		<input type="text" class="form-control" name="item_no"  value="<?php echo $data->item_no; ?>" >
				        	</div>
						    <div class="form-group col-md-6">
						    	<label>Object Class</label>
				        		<input type="text" class="form-control" name="classname"  value="<?php echo $data->classname; ?>">
				        	</div>
				        </div>
				        

				        <div class="form-row">
						    <div class="form-group col-md-12">
						    	<label>Image</label>
						    	<input type="text" class="form-control" name="imagename"  value="<?php echo $data->imagename; ?>">
				        	</div>
				        </div>
				        
				        <div class="form-row">
						    <div class="form-group col-md-12">
						    	<label>Special Containment Procedure</label>
						    	<textarea class="form-control" name="procedures" rows="5" placeholder="<?php echo $data->procedures; ?>"><?php echo $data->procedures; ?></textarea>
						    </div>
				        </div>


				        <div class="form-row">
						    <div class="form-group col-md-12">
						    	<label>Description</label>
						    	<textarea class="form-control" name="description" rows="5" placeholder="<?php echo $data->description; ?>"><?php echo $data->description; ?></textarea>
				        	</div>
				        </div>

				        

				        <div class="form-row">
						    <div class="form-group col-md-12">
						    	<label>Reference</label>
						    	<textarea class="form-control" name="reference" rows="5" placeholder="<?php echo $data->reference; ?>"><?php echo $data->reference; ?></textarea>
				        	</div>
				        </div>


				        <div class="form-row">
						    <div class="form-group col-md-12">
						    	<label>Additional Notes</label>
						    	<textarea class="form-control" name="add_notes" rows="6" placeholder="<?php echo $data->add_notes; ?>"><?php echo $data->add_notes; ?></textarea>
				        	</div>
				        </div>

				        <div class="form-row">
						    <div class="form-group col-md-12">
						    	<label>Extra One</label>
						    	<textarea class="form-control" name="extra_1" rows="5" placeholder="<?php echo $data->extra_1; ?>"><?php echo $data->extra_1; ?></textarea>
				        	</div>
				        </div>


				        <div class="form-row">
						    <div class="form-group col-md-12">
						    	<label>Extra Two</label>
						    	<textarea class="form-control" name="extra_2" rows="5" placeholder="<?php echo $data->extra_2; ?>"><?php echo $data->extra_2; ?></textarea>
				        	</div>
				        </div>

				        <input type="submit" class="btn btn-success" name="update" value="Update SCP Page Details">

		        	</form>
		        	<footer class="col-md-12 p-4">
                    &copy; copyright 2020
                    </footer>
        		</div>
        	</div>
        </body>
    </html>
<?php 
}
?>