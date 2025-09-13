<?php 
    // require_once("database/connection.php"); 
    require_once(__DIR__ . "/../database/connection.php");

    // Here we will write our core logic for add update and delete in our custom controller file for user.
    
    $method = $_SERVER['REQUEST_METHOD'];

    /*
        Q. What is $_SERVER['']

        Ans:
            ** Before getting the answer of the question we should know about "Super Global"

            Super Global: It is a predefine variable and you can access it from all scope in php.
            
            $GLOBALS['variable_name'] to access global variable 
            Ex:
                Suppose you have create a variable the 
                $my_name = "Golu";
  
                function myName() {
                    echo $GLOBALS['my_name'];
                }

                myName()  ---> You will get (Golu)

            $_SERVER[''] is a global variable that contain all information about header path scripts and location
            
            Mainly you will use 

            echo $_SERVER['REQUEST_METHOD']; 

                ...... (Explore superglobal for now we will provide more details in next day.)

    */

    if ($method != "POST"){

        echo "Invalid request method"; 

        /*
            Q. What is echo ?
            Ans: Explore it

            Q. What is Diffrent Between echo, print, print_r, var_dump, die() ??
            Ans: Explore it for now we will provide more details in next day.

        */

    }
    else{
        
        /*
            Q. What is $_POST[''] ?
            Ans: It is also a superglobal which contain array of variable which was submitted by form using POST Method
            
            Also You should know about $_REQUEST[''] before $_POST[''] and $_GET['']
            $_REQUEST[''] = The superglobal $_REQUEST[''] contains all data in form of array from $_GET[''], $_POST[''], $_COOKIE[''] 

        */

        $id  = $_POST['id']; // GETTING ID FROM $_POST[''] superglobal
        
        // $name = $_POST['name'];
        
        // OR To get data from request

        $name = $_REQUEST['name'];

        // $phone = $_POST['phone'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        // $password = $_POST['password'];

        $result = q("INSERT INTO users (name, email, phone, 'password') VALUES ('$name', '$email' , '$phone', '$password');");
       
        if ($result === TRUE){
            echo "User Created Successfully";
        }
        else{
            echo "Error While Creating User";
        }

        
    }

