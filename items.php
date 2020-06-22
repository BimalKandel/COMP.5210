<?php 
include('config.php');
if(isset($_GET['item'])){
    $item = $_GET['item'];
    $resultgetting = mysqli_query($con, "SELECT * from subject WHERE item_no = '$item'") or die($con->error());
    $data  = mysqli_fetch_object($resultgetting);?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Item <?php echo $data->item_no; ?></title>
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

            <link rel="stylesheet" type="text/css" href="css/style.css"/>

            <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer/">

            <!--google fonts-->
            <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
        </head>

        <body>
        	<div class="row">
                <div class="col">

                 <!--new navigation -->

                    <nav class="navbar-expand-md navbar-dark sticky-top">
                        <!--trial for logo -->
                        <div class="container-fluid">

                            <a class="navbar-brand" href="index.php" ><img src="assets/images/logo.jpg"></a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse" id="navbarResponsive">
                                    <!--added navbar-expand-md and sticky-top -->

                                    <ul class="navbar-nav m-auto">

                                        <!--run php loop through the database and display page names here-->

                                        <?php while($row = mysqli_fetch_object($sql)){ ?>
                                        <li class="nav-item active">
                                          <a href="items.php?item=<?php echo $row->item_no; ?>"class="nav-link text-light"><?php echo $row->item_no; ?></a>
                                        </li>
                                        <?php } ?>

                                        <li class="nav-item active">
                                          <a href="form.php" class="nav-link text-light">Enter a new SCP Page Record</a>
                                        </li>
                                    </ul>
                            </div>

                        </div>
                        <!--trial ended -->
                    </nav>
                </div>

            </div>
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-12">
                        <h1><b>Item #: </b><?php echo $data->item_no; ?></h1>
                        <h2><b>Object Class: </b><?php echo $data->item_no; ?></h2>
                    </div>
                    <div class="col-md-12 image_deatils">
                        <?php
                        if ($data->imagename) { echo "<br><p><img src='assets/images/".$data->imagename."' class='img-fluid shadow p-3 mb-5 mx-auto d-block' ></p>";}
                        ?>
                    </div>
                    <div class="col-md-12">
                    <h3>Special Containment Procedures:</h3>
                    <p><?php echo $data->procedures; ?></p>
                    <h3>Description:</h3>
                    <p><?php echo $data->description; ?></p>
                    <?php 
                    if ($data->reference){
                    echo "<h3>Reference:</h3><p>".$data->reference."</p>"; }

                    if ($data->add_notes) {echo "Additional Notes:</h3><p>".$data->add_notes."</p> ";}

                    if ($data->extra_1) { echo "<p>".$data->extra_1."</p>";}

                    if ($data->extra_2) { echo "<p>".$data->extra_2."</p>";}

                    ?>
                        
                    </div>
                    <div class="col-md-12">
                        <a href="update.php?item=<?php echo $item; ?>" class="btn btn-info">Update</a>
                        <a href="delete.php?delete=<?php echo $data->id; ?>" class="btn btn-danger">Delete</a>
                    </div>
                       
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