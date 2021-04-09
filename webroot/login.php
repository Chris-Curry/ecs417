<?php 

require("conn.php");
session_start();


if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST ['password'];
    $query = "SELECT * FROM USERS WHERE email = '".$email."' AND password = '".$password."'";
    
    $result = mysqli_query($conn,$query);

    if (mysqli_num_rows($result) >= 0){
        echo("Login Successful");
    }
    else{
        echo("Login Failed");
    }
}

?>