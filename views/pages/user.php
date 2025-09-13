<?php 
    # Including required database connection
    require( __DIR__ . "/../../database/connection.php");

    $user_list = q("SELECT id, name, email, phone FROM users");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User List</title>
        <link rel="stylesheet" href="assets/index.css">
    </head>

    <?php 
        /* Including required views and database connection */
        
        include (__DIR__. "/../layout/header.php");
        
        include (__DIR__. "/../layout/navbar.php");
        
    ?>


    <body>
        <h1 class="main-heading">
            User List
        </h1>
        
        <table>
            <?php if ($user_list){ ?>
                <p>User List Fatched Successfully Total <i class="bold"> <?php echo $user_list->num_rows ?> </i> data found</p>
            <?php } ?>
        
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        
            <tr>

                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
        
            </tr>
        </table>
        
        <form action="controller/save-user-data.php" method="POST" class="form">
            <input type="hidden" name="id" value="1">
            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Enter your name">
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Enter your email">
            </div>
            
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" placeholder="Enter your phone">
            </div>

            <div class="form-group">
                <button type="submit">Save User</button>
            </div>

        </form>

        <?php 
            /* Including required views*/
            
            include (__DIR__. "/../layout/footer.php");

        ?>
        
    </body>

</html>

