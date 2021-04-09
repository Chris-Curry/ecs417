<?php 

require("conn.php");



if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST ['password'];
    $query = "SELECT * FROM USERS WHERE email = '".$email."' AND password = '".$password."'";
    
    $result = mysqli_query($conn,$query);

    if (mysqli_num_rows($result) >= 0){
        session_start();
        echo("Login Successful");
    }
    else{
        die("Login Failed");
    }
}

?>