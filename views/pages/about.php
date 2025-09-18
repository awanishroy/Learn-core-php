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
        <section class="about-container">
            <h2 class="about-heading">About Us</h2>
            <p class="about-content">
                Welcome to our Core PHP Learning Project.  
                This project is built step by step, documenting daily progress, coding practices, and team collaboration.  
                Our mission is to **learn by building** — covering setup, database, forms, user management, and more.  
            </p>

            <p class="about-content">
                We believe in <b>clean code</b>, <b>reusability</b>, and <b>hands-on practice</b>.  
                Every day’s work is recorded to help others understand the journey of building a real-world PHP application.
            </p>

            <div class="about-team">
                <div class="team-member">
                <img src="assets/public/user.jpg" alt="Golu">
                <h3>Golu Sharma</h3>
                <p>Backend Developer</p>
                </div>
                <div class="team-member">
                <img src="assets/public/user.jpg" alt="Sonu">
                <h3>Sonu Verma</h3>
                <p>Frontend Developer</p>
                </div>
                <div class="team-member">
                <img src="assets/public/user.jpg" alt="Rahul">
                <h3>Rahul Singh</h3>
                <p>Database Manager</p>
                </div>
                <div class="team-member">
                <img src="assets/public/user.jpg" alt="Priya">
                <h3>Priya Mehta</h3>
                <p>UI/UX Designer</p>
                </div>
            </div>
            </section>


        <?php 
            /* Including required views*/
            
            include (__DIR__. "/../layout/footer.php");

        ?>
        
    </body>

</html>
