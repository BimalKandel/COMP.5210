<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

        <link rel="stylesheet" type="text/css" href="css/style.css"/>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer/">

        <!--google fonts-->
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    </head>

    <body >
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

        <div class="row">
            <div class="container">
                 <div class="col-md-12">
                    <h1 class="txt-center custom-h1"><img src="assets/images/index.png" alt="Logo of SCP Foundation" />SCP Foundation</h1>
                    <p>The SCP Foundation is a fictional organization documented by the web-based collaborative-fiction project of the same name. Within the website's fictional setting, the SCP Foundation is responsible for locating and containing individuals, entities, locations, and objects that violate natural law (referred to as SCPs). The real-world website is community-based and includes elements of many genres such as horror, science fiction, and urban fantasy.
                    </p>
                    <p>On the SCP Foundation wiki, the majority of works consist of "special containment procedures": structured internal documentation that describes an SCP object and the means of keeping it contained. The website also contains thousands of "Foundation Tales", short stories set within the universe of the SCP Foundation. The series has been praised for its ability to convey horror through its scientific and academic writing style, as well as for its high standards of quality. </p>
                        
                    <footer class="col-md-12 p-4">
                    &copy; copyright 2020
                    </footer>
                </div>
            </div>
        </div>
        
       
    </body>
</html>