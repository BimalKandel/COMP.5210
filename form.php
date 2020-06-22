<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add SPC Page record</title>
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
        			<h4>Form to add details of SPC</h4>
	            	<div class="form-row">
					    <div class="form-group col-md-6">
					    	<label>Item no.</label>
			        		<input type="text" class="form-control" name="item_no"  />
			        	</div>
					    <div class="form-group col-md-6">
					    	<label>Object Class</label>
			        		<input type="text" class="form-control" name="classname"/>
			        	</div>
			        </div>
			        

			        <div class="form-row">
					    <div class="form-group col-md-12">
					    	<label>Image</label>
					    	<input type="text" class="form-control" name="imagename"  />
			        	</div>
			        </div>
			        
			        <div class="form-row">
					    <div class="form-group col-md-12">
					    	<label>Special Containment Procedure</label>
					    	<textarea class="form-control" name="procedures" rows="5" ></textarea>
					    </div>
			        </div>


			        <div class="form-row">
					    <div class="form-group col-md-12">
					    	<label>Description</label>
					    	<textarea class="form-control" name="description" rows="5" ></textarea>
			        	</div>
			        </div>

			        

			        <div class="form-row">
					    <div class="form-group col-md-12">
					    	<label>Reference</label>
					    	<textarea class="form-control" name="reference" rows="5"></textarea>
			        	</div>
			        </div>


			        <div class="form-row">
					    <div class="form-group col-md-12">
					    	<label>Additional Notes</label>
					    	<textarea class="form-control" name="add_notes" rows="6"></textarea>
			        	</div>
			        </div>

			        <div class="form-row">
					    <div class="form-group col-md-12">
					    	<label>Extra One</label>
					    	<textarea class="form-control" name="extra_1" rows="5"></textarea>
			        	</div>
			        </div>


			        <div class="form-row">
					    <div class="form-group col-md-12">
					    	<label>Extra Two</label>
					    	<textarea class="form-control" name="extra_2" rows="5" ></textarea>
			        	</div>
			        </div>

			        <input type="submit" class="btn btn-success" name="add" value="Insert SCP Page Details">

	        
				</form>
	        	<footer class="col-md-12 p-4">
                &copy; copyright 2020
                </footer></form>
    		</div>
    	</div>
    </body>
</html>