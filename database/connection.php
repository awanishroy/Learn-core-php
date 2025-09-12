<?php
    require_once("config/database.php");
    try{
        $database = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        
        // ============================== or ==============================
        
        // $database = mysqli_connect("localhost", "roor", "root", "sql_learning");


        if ($database){

            // echo ("Database Connected Successfully");

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

    