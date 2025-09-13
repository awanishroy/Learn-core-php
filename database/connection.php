<?php
    # Here is our database connection related code and we will reuse this everywhere 
    require_once(__DIR__ . "/../config/database.php");

    /*
        Q. What is require_once() and what is exactly Method or Function ?
        Ans: require_once is a function in php which is used to include php file at once.
        
        Also You should know about required() and include()
        Ans: Explore it for now we will provide more details in next day.


        Q. What is __DIR__ ?
        Ans: __DIR__ is magic constant in PHP threr are many more magic content in PHP 
        magic constant = magic contant is a special type of constant which changes their value dynamically
        in which context and its return value like here we are using __DIR__ it will return the directory where it is using.

        as __CLASS__ .... explore yourself will provide more details in next day.

    */

    try{

        /*
            Q. What is Try? (The Most Important Note)

            Ans:
                It is a way to handle critical errors without crashing the program.
                The try block lets you *test* a block of code for errors (exceptions).
                If an exception occurs, PHP does not crash, instead it passes the error to the catch block.
        */

        /*
            Q. How to Connect to a Database in PHP?

            Ans:
                There are mainly two ways to connect PHP with MySQL database:
                
                1. **MySQLi (MySQL Improved)**
                    - Works only with MySQL databases
                    - Two styles available:
                        a) Object-Oriented (In my code i am using this)
                        b) Procedural ()

                2. **PDO (PHP Data Objects)** (Will do in advance project stay connected.)
                    - Works with *many databases* (MySQL, PostgreSQL, SQLite, Oracle, etc.)
                    - More flexible and secure
                    - Recommended for larger projects
        */

        // $database = new mysqli("localhost", "roor", "root", "sql_learning");
        /*

            This Line is commented because i dont want show my credetials in code thats why
            I am using config/database.php to get all information from my define constant
        */

        $database = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        
        // ============================== or ==============================
        
        // $database = mysqli_connect("localhost", "roor", "root", "sql_learning");

        /*

            This line is commented because I don’t want to use the procedural way.
            The Object-Oriented style is cleaner, modern, and more maintainable.
        */

        if ($database){

            // echo ("Database Connected Successfully"); // remove comment for tasting

            // Getting Query Result
            function q($q) {
                
                global $database;

                try{
                    return $database->query($q);
                }
                catch (Exception $ex){
                    die("Error While Excution of Query" . $ex->getMessage()); 
                }
            }

        }

    }
    catch(Exception $ex){

        die("Connnection Failed" . " <br> " . $ex->getMessage());
    
    }

    