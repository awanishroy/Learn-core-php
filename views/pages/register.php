<?php 
    # Including required database connection
    # require( __DIR__ . "/database/connection.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register User</title>
        <link rel="stylesheet" href="assets/index.css">
    </head>

    <?php 
        /* Including required views and database connection */
        
        include (__DIR__. "/../layout/header.php");
        
        include (__DIR__. "/../layout/navbar.php");
        
    ?>


    <body>
        <section class="register-container">
            <h2 class="register-heading">Create an Account</h2>
            <form action="register.php" method="post" class="register-form">
                <div class="register-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
                </div>

                <div class="register-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="register-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Choose a username" required>
                </div>

                <div class="register-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Create a password" required>
                </div>

                <div class="register-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm_password" placeholder="Re-enter your password" required>
                </div>

                <div class="register-group">
                <label for="role">Role</label>
                <select id="role" name="role" required>
                    <option value="" disabled selected>Select your role</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="admin">Admin</option>
                </select>
                </div>

                <button type="submit" class="register-submit">Register</button>
            </form>
            </section>


        <?php 
            /* Including required views*/
            
            include (__DIR__. "/../layout/footer.php");

        ?>
        
    </body>

</html>
