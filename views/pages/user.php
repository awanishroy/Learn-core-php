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
        <section class="user-container">
            <h2 class="user-heading">User List</h2>

            <table class="user-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
               <tr>
                    <td>1</td>
                    <td>Golu Sharma</td>
                    <td>golu@example.com</td>
                    <td>golu123</td>
                    <td>Student</td>
                    <td class="user-actions">
                        <a href="#1" class="btn btn-edit">Edit</a>
                        <a href="#1" class="btn btn-delete">Delete</a>
                    </td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>Sonu Verma</td>
                    <td>sonu@example.com</td>
                    <td>sonuv</td>
                    <td>Student</td>
                    <td class="user-actions">
                        <a href="#2" class="btn btn-edit">Edit</a>
                        <a href="#2" class="btn btn-delete">Delete</a>
                    </td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>Rahul Kumar</td>
                    <td>rahul@example.com</td>
                    <td>rahul_k</td>
                    <td>Teacher</td>
                    <td class="user-actions">
                        <a href="#3" class="btn btn-edit">Edit</a>
                        <a href="#3" class="btn btn-delete">Delete</a>
                    </td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td>Priya Singh</td>
                    <td>priya@example.com</td>
                    <td>priya_s</td>
                    <td>Student</td>
                    <td class="user-actions">
                        <a href="#4" class="btn btn-edit">Edit</a>
                        <a href="#4" class="btn btn-delete">Delete</a>
                    </td>
                    </tr>
                    <tr>
                    <td>5</td>
                    <td>Neha Patel</td>
                    <td>neha@example.com</td>
                    <td>nehap</td>
                    <td>Admin</td>
                    <td class="user-actions">
                        <a href="#5" class="btn btn-edit">Edit</a>
                        <a href="#5" class="btn btn-delete">Delete</a>
                    </td>
                    </tr>
                    <tr>
                    <td>6</td>
                    <td>Amit Yadav</td>
                    <td>amit@example.com</td>
                    <td>amit_y</td>
                    <td>Student</td>
                    <td class="user-actions">
                        <a href="#6" class="btn btn-edit">Edit</a>
                        <a href="#6" class="btn btn-delete">Delete</a>
                    </td>
                    </tr>
                    <tr>
                    <td>7</td>
                    <td>Kavita Mishra</td>
                    <td>kavita@example.com</td>
                    <td>kavitam</td>
                    <td>Teacher</td>
                    <td class="user-actions">
                        <a href="#7" class="btn btn-edit">Edit</a>
                        <a href="#7" class="btn btn-delete">Delete</a>
                    </td>
                    </tr>
                    <tr>
                    <td>8</td>
                    <td>Ankit Gupta</td>
                    <td>ankit@example.com</td>
                    <td>ankitg</td>
                    <td>Student</td>
                    <td class="user-actions">
                        <a href="#8" class="btn btn-edit">Edit</a>
                        <a href="#8" class="btn btn-delete">Delete</a>
                    </td>
                    </tr>
                    <tr>
                    <td>9</td>
                    <td>Rohit Reddy</td>
                    <td>rohit@example.com</td>
                    <td>rohit_r</td>
                    <td>Admin</td>
                    <td class="user-actions">
                        <a href="#9" class="btn btn-edit">Edit</a>
                        <a href="#9" class="btn btn-delete">Delete</a>
                    </td>
                    </tr>
                    <tr>
                    <td>10</td>
                    <td>Pooja Iyer</td>
                    <td>pooja@example.com</td>
                    <td>poojai</td>
                    <td>Student</td>
                    <td class="user-actions">
                        <a href="#10" class="btn btn-edit">Edit</a>
                        <a href="#10" class="btn btn-delete">Delete</a>
                    </td>
                    </tr>
                    <tr>
                    <td>11</td>
                    <td>Deepak Choudhary</td>
                    <td>deepak@example.com</td>
                    <td>deepakc</td>
                    <td>Teacher</td>
                    <td class="user-actions">
                        <a href="#11" class="btn btn-edit">Edit</a>
                        <a href="#11" class="btn btn-delete">Delete</a>
                    </td>
                    </tr>
                    <tr>
                    <td>12</td>
                    <td>Simran Kaur</td>
                    <td>simran@example.com</td>
                    <td>simrank</td>
                    <td>Student</td>
                    <td class="user-actions">
                        <a href="#12" class="btn btn-edit">Edit</a>
                        <a href="#12" class="btn btn-delete">Delete</a>
                    </td>
                    </tr>
                    <tr>
                    <td>13</td>
                    <td>Vikas Mehta</td>
                    <td>vikas@example.com</td>
                    <td>vikasm</td>
                    <td>Admin</td>
                    <td class="user-actions">
                        <a href="#13" class="btn btn-edit">Edit</a>
                        <a href="#13" class="btn btn-delete">Delete</a>
                    </td>
                    </tr>
                    <tr>
                    <td>14</td>
                    <td>Swati Joshi</td>
                    <td>swati@example.com</td>
                    <td>swatij</td>
                    <td>Student</td>
                    <td class="user-actions">
                        <a href="#14" class="btn btn-edit">Edit</a>
                        <a href="#14" class="btn btn-delete">Delete</a>
                    </td>
                    </tr>
                    <tr>
                    <td>15</td>
                    <td>Manoj Bansal</td>
                    <td>manoj@example.com</td>
                    <td>manojb</td>
                    <td>Teacher</td>
                    <td class="user-actions">
                        <a href="#15" class="btn btn-edit">Edit</a>
                        <a href="#15" class="btn btn-delete">Delete</a>
                    </td>
                    </tr>
                    <tr>
                    <td>16</td>
                    <td>Rani Das</td>
                    <td>rani@example.com</td>
                    <td>ranid</td>
                    <td>Student</td>
                    <td class="user-actions">
                        <a href="#16" class="btn btn-edit">Edit</a>
                        <a href="#16" class="btn btn-delete">Delete</a>
                    </td>
                    </tr>
                    <tr>
                    <td>17</td>
                    <td>Arjun Nair</td>
                    <td>arjun@example.com</td>
                    <td>arjunn</td>
                    <td>Student</td>
                    <td class="user-actions">
                        <a href="#17" class="btn btn-edit">Edit</a>
                        <a href="#17" class="btn btn-delete">Delete</a>
                    </td>
                    </tr>
                    <tr>
                    <td>18</td>
                    <td>Sneha Rani</td>
                    <td>sneha@example.com</td>
                    <td>snehar</td>
                    <td>Teacher</td>
                    <td class="user-actions">
                        <a href="#18" class="btn btn-edit">Edit</a>
                        <a href="#18" class="btn btn-delete">Delete</a>
                    </td>
                    </tr>
                    <tr>
                    <td>19</td>
                    <td>Karan Malhotra</td>
                    <td>karan@example.com</td>
                    <td>karanm</td>
                    <td>Admin</td>
                    <td class="user-actions">
                        <a href="#19" class="btn btn-edit">Edit</a>
                        <a href="#19" class="btn btn-delete">Delete</a>
                    </td>
                    </tr>
                    <tr>
                    <td>20</td>
                    <td>Anjali Pandey</td>
                    <td>anjali@example.com</td>
                    <td>anjalip</td>
                    <td>Student</td>
                    <td class="user-actions">
                        <a href="#20" class="btn btn-edit">Edit</a>
                        <a href="#20" class="btn btn-delete">Delete</a>
                    </td>
                    </tr>

                </tbody>
            </table>
            </section>


        <?php 
            /* Including required views*/
            
            include (__DIR__. "/../layout/footer.php");

        ?>
        
    </body>

</html>

