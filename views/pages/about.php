<?php 
    # Including required database connection
    # require( __DIR__ . "/database/connection.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>
        <link rel="stylesheet" href="assets/index.css">
    </head>

    <?php 
        /* Including required views and database connection */
        
        include (__DIR__. "/../layout/header.php");
        
        include (__DIR__. "/../layout/navbar.php");
        
    ?>


    <body>
        <h1 class="main-heading">
            Welcome To About US
        </h1>

        <?php 
            /* Including required views*/
            
            include (__DIR__. "/../layout/footer.php");

        ?>
        
    </body>

</html>
