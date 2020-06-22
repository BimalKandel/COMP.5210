<?php 
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Processing</title>
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
                <?php
                if (isset($_POST['add'])) {
                    //create variables from our posted form values
                    $item_no = mysqli_real_escape_string($con, $_POST['item_no']);
                    $classname = mysqli_real_escape_string($con, $_POST['classname']);
                    $imagename = mysqli_real_escape_string($con, $_POST['imagename']);
                    $procedures = mysqli_real_escape_string($con, $_POST['procedures']);
                    $description = mysqli_real_escape_string($con, $_POST['description']);
                    $reference = mysqli_real_escape_string($con, $_POST['reference']);
                    $add_notes = mysqli_real_escape_string($con, $_POST['add_notes']);
                    $extra_1 = mysqli_real_escape_string($con, $_POST['extra_1']);
                    $extra_2 = mysqli_real_escape_string($con, $_POST['extra_2']);

                    //create an insert command
                    $insert = "INSERT subject (item_no, classname, imagename, procedures, description, reference, add_notes, extra_1, extra_2) VALUES ('$item_no', '$classname', '$imagename', '$procedures', '$description', '$reference', '$add_notes', '$extra_1', '$extra_2')"; 
                    

                    //display success or error message on screen
                    if(mysqli_query($con,$insert) ===TRUE)
                    {
                        echo "
                            <h1>Record inserted successfully</h1>
                            <p><a href='index.php'>Back to index page</p>
                        ";
                    }
                    else
                    {
                        echo "
                        <h1>Error inserting data</h1>
                        <p>{$con->error()}</p>
                        <p><a href='index.php'>Back to index page</p>
                        ";
                    }
                }
                if(isset($_POST['update']))
                {
                    //create variables from our posted form values
                    $id = mysqli_real_escape_string($con, $_POST['id']);
                    $item_no = mysqli_real_escape_string($con, $_POST['item_no']);
                    $classname = mysqli_real_escape_string($con, $_POST['classname']);
                    $imagename = mysqli_real_escape_string($con, $_POST['imagename']);
                    $procedures = mysqli_real_escape_string($con, $_POST['procedures']);
                    $description = mysqli_real_escape_string($con, $_POST['description']);
                    $reference = mysqli_real_escape_string($con, $_POST['reference']);
                    $add_notes = mysqli_real_escape_string($con, $_POST['add_notes']);
                    $extra_1 = mysqli_real_escape_string($con, $_POST['extra_1']);
                    $extra_2 = mysqli_real_escape_string($con, $_POST['extra_2']);

                    //create an update command
                    $update = "UPDATE subject SET item_no='$item_no', classname='$classname', imagename='$imagename', procedures='$procedures', description='$description', reference='$reference', add_notes='$add_notes', extra_1='$extra_1', extra_2='$extra_2' where id=$id";
                    

                    //display success or error message on screen
                    if(mysqli_query($con,$update) ===TRUE)
                    {
                        echo "
                            <h1>Record updated successfully</h1>
                            <p><a href='index.php'>Back to index page</p>
                        ";
                    }
                    else
                    {
                        echo "
                        <h1>Error updating data</h1>
                        <p>{$con->error()}</p>
                        <p><a href='index.php'>Back to index page</p>
                        ";
                    }

                }
                if (isset($_GET['delete'])) {
                    $id =$_GET['delete'];

                    //create delete sql command
                    $delete = "DELETE from subject where id=$id";

                    //Run the command and then display the appropriate success or error messages
                    if(mysqli_query($con,$delete) === TRUE)
                    {
                        echo "<p>Record was deleted. <a href='index.php'>Return to Index Page</a></p>" ;
                    }
                    else
                    {
                        echo "
                            <p>There was an error deleting this record.</p>
                            <p{$con->error()}></p>
                            <p><a href='index.php'>Back to index page</a></p>
                        ";
                    }
                }
                ?>
            </div>
        </div>
    </body>
</html>