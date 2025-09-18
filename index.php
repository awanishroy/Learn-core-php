<?php 
    # Including required database connection
    require( __DIR__ . "/database/connection.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="assets/index.css">
    </head>

    <?php 
        /* Including required views and database connection */
        
        include (__DIR__. "/views/layout/header.php");
        
        include (__DIR__. "/views/layout/navbar.php");
        
    ?>

    <body>
        
        <!-- Hero Section -->
        <section class="home-hero">
        <h1>Welcome to Our PHP Learning Project</h1>
        <p>Documenting progress, building features, and learning step by step</p>
        <a href="about.php">Learn More</a>
        </section>

        <!-- About Section -->
        <section class="home-section">
        <h2>About This Project</h2>
        <p>
            This project is a hands-on journey into Core PHP.  
            From folder setup to database integration, form handling, and user management —  
            everything is built step by step with proper documentation.
        </p>
        </section>

        <!-- Features Section -->
        <section class="home-section">
        <h2>Key Features</h2>
        <div class="features">
            <div class="feature-card">
            <h3>⚡ Setup & Database</h3>
            <p>Organized folder structure with config, database connection, and testing MySQL integration.</p>
            </div>
            <div class="feature-card">
            <h3>👤 User Management</h3>
            <p>Create, list, and manage users with forms and clean URLs using .htaccess routing.</p>
            </div>
            <div class="feature-card">
            <h3>📝 Forms & Validation</h3>
            <p>Registration, login, and contact forms with server + client side validation.</p>
            </div>
            <div class="feature-card">
            <h3>🔗 Reusability</h3>
            <p>Reusable header, navbar, and footer for consistent design across all pages.</p>
            </div>
        </div>
        </section>


    <?php 
        /* Including required views*/
        
        include (__DIR__. "/views/layout/footer.php");

    ?>
        
    </body>

</html>
